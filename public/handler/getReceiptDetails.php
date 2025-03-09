<?php
include '../Database/dbconfig.php';

if (isset($_GET['ticketNumber'])) {
    $ticketNumber = $_GET['ticketNumber'];

    $sql = "SELECT * FROM transaction_history WHERE ticketNumber = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('s', $ticketNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Convert date and time to Philippines timezone
        $dateAndTime = new DateTime($row['dateAndTime']);
        $dateAndTime = date_default_timezone_set('Asia/Manila');
        $formattedDateAndTime = date('F j, Y g:i:a');

        $response = [
            'firstName' => $row['firstName'],
            'lastName' => $row['lastName'],
            'formattedDateAndTime' => $formattedDateAndTime,
            'optionOrigin' => $row['optionOrigin'],
            'optionDestinations' => $row['optionDestinations'],
            'ticketNumber' => $row['ticketNumber'],
            'farePrice' => $row['farePrice'],
            'status' => $row['status']
        ];

        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Transaction not found.']);
    }

    $stmt->close();
    $connection->close();
}
?>
