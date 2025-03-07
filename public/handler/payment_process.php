<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Process</title>
</head>

<body>
<?php

include '../Database/dbconfig.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $passengerFirstName = $_POST['passengerNameFirstname'];
    $passengerLastName = $_POST['passengerNameLastname'];
    $passengerEmail = $_POST['passengerEmail'];
    $passengerPhonenumber = $_POST['passengerPhonenumber'];
    $passengerOrigin = $_POST['passengerOrigin'];
    $passengerDestination = $_POST['passengerDestination'];
    $passengerDateAndTime = $_POST['passengerDateAndTime'];
    $numberPassenger = $_POST['numberPassenger'];
    $numberPassengerDiscount = $_POST['numberPassengerDiscount'];
    $passengerTicketNumber = $_POST['passengerTicketNumber'];
    $farePrice = $_POST['farePrice'];
    $regularPrice = $_POST['regularPrice'];
    $discountedPrice = $_POST['discountedPrice'];
    $totalFarePrice = intval($_POST['totalFarePrice']) * 100;

    $_SESSION['passengerFirstName'] = $passengerFirstName;
    $_SESSION['passengerLastName'] = $passengerLastName;
    $_SESSION['passengerEmail'] = $passengerEmail;
    $_SESSION['passengerPhonenumber'] = $passengerPhonenumber;
    $_SESSION['passengerOrigin'] = $passengerOrigin;
    $_SESSION['passengerDestination'] = $passengerDestination;
    $_SESSION['passengerDateAndTime'] = $passengerDateAndTime;
    $_SESSION['numberPassenger'] = $numberPassenger;
    $_SESSION['numberPassengerDiscount'] = $numberPassengerDiscount;
    $_SESSION['passengerTicketNumber'] = $passengerTicketNumber;
    $_SESSION['farePrice'] = $farePrice;
    $_SESSION['regularPrice'] = $regularPrice;
    $_SESSION['discountedPrice'] = $discountedPrice;
    $_SESSION['totalFarePrice'] = $totalFarePrice;

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
                    'amount' => $totalFarePrice,
                    'description' => "Testing",
                    'remarks' => "TESTING"
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
        } else {
            echo json_encode(['Error' => "No URL found"]);
        }
    }
} else {
    echo json_encode(['Error' => "Invalid Request Method"]);
}
?>
</body>

</html>