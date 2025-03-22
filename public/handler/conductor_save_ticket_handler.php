<?php

include '../Database/dbconfig.php';
include 'conductor_save_ticket_error_handler.php';

//REFLECT THE ISSUE TICKET BASE ON SEARCH ACCOUNT
$user_id = $_POST['user_id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$passengersCount = $_POST['passengersCount'];
$PassengersWithDiscount = $_POST['PassengersWithDiscount'];
$randomTicketNumber = $_POST['randomTicketNumber'];

if (empty($firstName)) {
    $ticketValidation['firstName'] = "First Name is required";
} else if (!preg_match("/^[a-z ,.'-]+$/i", $firstName)) {
    $ticketValidation['firstName'] = ' First Name must be letters only';
}

if (empty($lastName)) {
    $ticketValidation['lastName'] = "Last Name is required";
} else if (!preg_match("/^[a-z ,.'-]+$/i", $lastName)) {
    $ticketValidation['lastName'] = 'Last Name must be letters only';
} 

if (empty($email)) {
    $ticketValidation['email'] = "Email is required";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $ticketValidation['email'] = 'Email is invalid';
} 

if (empty($phoneNumber)) {
    $ticketValidation['phoneNumber'] = "Phone number is required";
} else if (!preg_match("/^09\d{9}$/", $phoneNumber)) {
    $ticketValidation['phoneNumber'] = 'Phone number must start with 09 and be followed by 9 digits';
}

if (empty($passengersCount)) {
    $ticketValidation['passengersCount'] = "Please enter the number of passengers";
} else if (!preg_match("/^[0-9]*$/", $passengersCount)) {
    $ticketValidation['passengersCount'] = "Only numbers allowed";
}

if (empty($PassengersWithDiscount)) {
    $ticketValidation['PassengersWithDiscount'] = "Please enter the number of passengers with discount";
} else if (!preg_match("/^[0-9]*$/", $PassengersWithDiscount)) {
    $ticketValidation['PassengersWithDiscount'] = "Only numbers allowed";
} 
