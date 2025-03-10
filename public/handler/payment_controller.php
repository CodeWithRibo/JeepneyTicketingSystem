<?php

include '../Database/dbconfig.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {


    // PAYMONGO API
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paymongo.com/v1/links", // API KEY for Paymongo
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'data' => [
                'attributes' => [
                    'amount' => $_SESSION['convertTotalFarePrice'],
                    'description' => "Payment for " . $_SESSION['passengerFirstName'] . ' ' . $_SESSION['passengerLastName'],
                    'remarks' => "TESTING",
                    'success_redirect' => 'https://www.youtube.com/watch?v=WrEP9aRupzQ' //fixing tomorrow
                ]
            ]
        ]),
        CURLOPT_HTTPHEADER => [
            "accept: application/json",
            "authorization: Basic c2tfdGVzdF9CU3RRYWtSZG5Fb255RHdjcWNrREYyNXk6",
            "content-type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo json_encode(['Error' => "cURL Error #;" . $err]);
    } else {
        $responseData = json_decode($response, true);
        if (isset($responseData['data']['attributes']['checkout_url'])) {
            $checkout_url = $responseData['data']['attributes']['checkout_url'];
            echo "<script>window.location.href = '$checkout_url';</script>";
            $userId = $_SESSION['user_id'];
            // UPDATE STATUS TO PAID
            $ticketNumber = $_SESSION['passengerTicketNumber'];
            $updateStatus = "UPDATE process_buyticket SET status = 'Paid'  WHERE user_id = ? AND ticketNumber  = ?";
            $stmt = $connection->prepare($updateStatus);
            $stmt->bind_param('is',  $userId, $ticketNumber);
            $stmt->execute();

            // AFTER STATUS PAID THEN MOVE TO THE TRANSCATION HISTORY
            $transactionHistory = "INSERT INTO transaction_history (user_id, firstName, lastName, dateAndTime, optionOrigin, optionDestinations, ticketNumber, farePrice, totalFarePrice, status,created_at) 
            SELECT user_id, firstName, lastName, dateAndTime, optionOrigin, optionDestinations, ticketNumber, farePrice, totalFarePrice, status, created_at FROM process_buyticket WHERE user_id = ? AND ticketNumber = ?";
            $stmtTransactionHistory = $connection -> prepare($transactionHistory);
            $stmtTransactionHistory -> bind_param('is', $_SESSION['user_id'],$_SESSION['passengerTicketNumber']);
            $stmtTransactionHistory -> execute();

            // DELETING RECORD FROM process_buyticket onces the status is paid
            $deleteTransaction = "DELETE FROM process_buyticket WHERE user_id = ? AND ticketNumber = ?";
            $stmtDeleteTransaction = $connection -> prepare($deleteTransaction);
            $stmtDeleteTransaction -> bind_param('is', $_SESSION['user_id'], $_SESSION['passengerTicketNumber']);
            $stmtDeleteTransaction -> execute();
        } else {
            echo json_encode(['Error' => "No URL found"]);
            
        }
    }
}
