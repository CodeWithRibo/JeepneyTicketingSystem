<?php

include '../Database/dbconfig.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //REFLECT THE ISSUE TICKET BASE ON SEARCH ACCOUNT
    $user_id = $_POST['user_id'];
    $fistName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $passengersCount = $_POST['passengersCount'];
    $PassengersWithDiscount = $_POST['PassengersWithDiscount'];

    $sql = "INSERT INTO process_buyticket (user_id, firstName, lastName, email, phoneNumber, passengersCount, PassengersWithDiscount) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmtData = $connection->prepare($sql);
    $stmtData->bind_param('issssss', $user_id, $fistName, $lastName, $email, $phoneNumber, $passengersCount, $PassengersWithDiscount);
    $stmtData->execute();


    if ($stmtData->affected_rows > 0) {
        echo 'Succesfully addded ticket ' . $user_id;
    } else {
        echo 'not added';
    }

    $stmtData->close();
}
