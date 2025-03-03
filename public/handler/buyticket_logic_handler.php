<?php

include_once '../handler/buyticket_error_handler.php';

// PASSENGER DETAILS
$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);
$email = trim($_POST['email']);
$phoneNumber = trim($_POST['phoneNumber']);
$dateAndTime = trim($_POST['dateAndTime']);
$passengersCount = trim($_POST['passengersCount']);
$PassengersWithDiscount = trim($_POST['PassengersWithDiscount']);
$optionDestinations = trim($_POST['optionDestinations']);
$farePrice = trim($_POST['farePrice']);


// DESTINATIONS
$optionOrigin = trim($_POST['optionOrigin']);
$ticketNumber = trim($_POST['randomTicketNumber']);
if (isset($_POST['optionDestinations'])) {
    $optionDestinations = trim($_POST['optionDestinations']);
}

//VALIDATIONS PROCESS
// FIRST NAME
if (empty($firstName)) {
    $buyticketErrors['firstName'] = "Please enter your First Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
    $buyticketErrors['firstName'] = "Only letters and white space allowed";
} else {
    $firstName = htmlspecialchars($firstName);
}

//LAST NAME
if (empty($lastName)) {
    $buyticketErrors['lastName'] = "Please enter your Last Name";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
    $buyticketErrors['lastName'] = "Only letters and white space allowed";
} else {
    $lastName = htmlspecialchars($lastName);
}

//EMAIL 
if (empty($email)) {
    $buyticketErrors['email'] = "Please enter your Email";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $buyticketErrors['email'] = "Invalid email format";
} else {
    $email = htmlspecialchars($email);
}

//PHONE NUMBER
if (empty($phoneNumber)) {
    $buyticketErrors['phoneNumber'] = "Please enter your Phone Number";
} else if (!preg_match("/^[0-9]*$/", $phoneNumber)) {
    $buyticketErrors['phoneNumber'] = "Only numbers allowed";
} else {
    $phoneNumber = htmlspecialchars($phoneNumber);
}

//DATE AND TIME
if (empty($dateAndTime)) {
    $buyticketErrors['dateAndTime'] = "Please enter the Date and Time";
} else {
    $dateAndTime = htmlspecialchars($dateAndTime);
}

//PASSENGERS COUNT
if (empty($passengersCount)) {
    $buyticketErrors['passengersCount'] = "Please enter the number of passengers";
} else if (!preg_match("/^[0-9]*$/", $passengersCount)) {
    $buyticketErrors['passengersCount'] = "Only numbers allowed";
} else {
    $passengersCount = htmlspecialchars($passengersCount);
}

//PASSENGERS WITH DISCOUNT
if (empty($PassengersWithDiscount)) {
    $buyticketErrors['PassengersWithDiscount'] = "Please enter the number of passengers with discount";
} else if (!preg_match("/^[0-9]*$/", $PassengersWithDiscount)) {
    $buyticketErrors['PassengersWithDiscount'] = "Only numbers allowed";
} else {
    $PassengersWithDiscount = htmlspecialchars($PassengersWithDiscount);
}

//ORIGIN
if (empty($optionOrigin)) {
    $buyticketErrors['optio$optionOrigin'] = "Please select a destination";
} else {
    $optionOrigin = htmlspecialchars($optionOrigin);
}

//DESTINATIONS
if (empty($optionDestinations)) {
    $buyticketErrors['optionDestinations'] = "Please select a destination";
} else {
    $optionDestinations = htmlspecialchars($optionDestinations);
}
