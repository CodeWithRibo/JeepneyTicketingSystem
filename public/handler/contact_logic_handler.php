<?php

$firstName = $lastName = $email = $subject = $message = "";
$contactErrors = ["firstName" => "", "lastName" => "", "email" => "", "subject" => "", "message" => ""];

// contact form validation
$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

// 
if(empty($firstName)) {
    $contactErrors['firstName'] = "First Name is required";
} else if(!preg_match("/^[a-z ,.'-]+$/i", $firstName)) {
    $contactErrors['firstName'] = ' First Name must be letters only';
} else {
    $firstName = htmlspecialchars($firstName);
} 

if(empty($lastName)) {
    $contactErrors['lastName'] = "Last Name is required";
} else if(!preg_match("/^[a-z ,.'-]+$/i", $lastName)) {
    $contactErrors['lastName'] = 'Last Name must be letters only';
} else {
    $lastName = htmlspecialchars($lastName);
}

if(empty($email)) {
    $contactErrors['email'] = "Email is required";
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $contactErrors['email'] = 'Email is invalid';
}  else {
    $email = htmlspecialchars($email);
}


if(empty($subject)) {
    $contactErrors['subject'] = "Subject is required";
} else if(!preg_match("/^[a-z\d_ ]{2,20}$/i", $subject)) {
    $contactErrors['subject'] = 'Subject must be 2-20 characters long';
} else {
    $subject = htmlspecialchars($subject);
}

if(empty($message)) {
    $contactErrors['message'] ="Message is required";
} else if (!preg_match("/^[a-zA-Z0-9 \(\)\n]*$/",$message)) {
    $contactErrors['message'] = 'Message must be letters and numbers only';
} else {
    $message = htmlspecialchars($message);
} 

?>