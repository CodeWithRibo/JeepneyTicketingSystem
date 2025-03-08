<?php

include '../Database/dbconfig.php';

session_start();


$rows = [];

$userId = $_SESSION['user_id'];
$ticketNumber = $_SESSION['passengerTicketNumber'];

$sql = "SELECT * FROM transaction_history WHERE user_id = ? AND ticketNumber = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param('is', $userId, $ticketNumber);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    foreach ($rows as $row) {
        echo $row['firstName'];
    }

    ?>
</body>

</html>