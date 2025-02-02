<?php

include_once '../handler/errors_handler.php';


// signup form validation
$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);
$userName = trim($_POST['userName']);
$email = trim($_POST['email']);
$phoneNumber = trim($_POST['phoneNumber']);
$password = trim($_POST['password']);
$confirmPassword = trim($_POST['confirmPassword']);

// contact form validation
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

if(empty($subject)) {
    $contactErrors['subject'] = "Subject is required";
} else if(!preg_match("/^[a-z\d_]{2,20}$/i", $subject)) {
    $contactErrors['subject'] = 'Subject must be 2-20 characters long';
} else {
    $subject = htmlspecialchars($subject);
}

if(empty($message)) {
    $contactErrors['message'] ="Message is required";
} else if (!preg_match("/^[a-zA-Z0-9 \(\)\n]*$/",$name)) {
    $contactErrors['message'] = 'Message must be letters and numbers only';
} else {
    $message = htmlspecialchars($message);
}

// 
if(empty($firstName)) {
    $errors['firstName'] = "First Name is required";
} else if(!preg_match("/^[a-z ,.'-]+$/i", $firstName)) {
    $errors['firstName'] = ' First Name must be letters only';
} else {
    $firstName = htmlspecialchars($firstName);
} 

if(empty($lastName)) {
    $errors['lastName'] = "Last Name is required";
} else if(!preg_match("/^[a-z ,.'-]+$/i", $lastName)) {
    $errors['lastName'] = 'Last Name must be letters only';
} else {
    $lastName = htmlspecialchars($lastName);
}

if(empty($userName)) {
    $errors['userName'] = "Username is required";
} else if(!preg_match("/^[a-z\d_]{2,20}$/i", $userName)) {
    $errors['userName'] = 'Username must be 2-20 characters long';
} else {
    $userName = htmlspecialchars($userName);
}

if(empty($email)) {
    $errors['email'] = "Email is required";
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email is invalid';
}  else {
    $email = htmlspecialchars($email);
}

if(empty($phoneNumber)) {
    $errors['phoneNumber'] = "Phone number is required";
} else if(!preg_match("/^09\d{9}$/", $phoneNumber)) {
    $errors['phoneNumber'] = 'Phone number must start with 09 and be followed by 9 digits';
} else {
    $phoneNumber = htmlspecialchars($phoneNumber);
}

if(empty($password)) {
    $errors['password'] = "Password is required";
} else if(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/",$password)) {
    $errors['password'] = 'Password must be 8-12 characters long and contain at least one number and one letter';
} else  {
    $password = htmlspecialchars($password);
} 

if(empty($confirmPassword)) {
    $errors['confirmPassword'] = "Confirm Password is required";
} else if($password != $confirmPassword) {
    $errors['confirmPassword'] = 'Password and Confirm Password do not match';
} else {
    $confirmPassword = htmlspecialchars($confirmPassword);
}

?>