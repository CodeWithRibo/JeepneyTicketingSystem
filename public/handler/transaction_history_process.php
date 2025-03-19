<?php

include '../Database/dbconfig.php';
session_start();

//CHECK IS USER IS LOGGED IN
if (!isset($_SESSION['user_id'])) {
    header('Location: ../Logout/home_page.php');
    exit();
}

    if(isset($_SESSION['user_id'])) {
        $isLogin = $_SESSION['user_id'];
    }

    $selectData = "SELECT firstName, lastName FROM jts_users WHERE id = ?";
    $stmt = $connection -> prepare($selectData);
    $stmt -> bind_param('i', $isLogin);
    $stmt -> execute();
    $result = $stmt -> get_result();

    if($result-> num_rows > 0) {
        $row = $result -> fetch_assoc();
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
    }


$rows = [];
$userId = $_SESSION['user_id'];

$sql = "SELECT * FROM transaction_history WHERE user_id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param('i', $userId);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

$connection->close();
$stmt->close();