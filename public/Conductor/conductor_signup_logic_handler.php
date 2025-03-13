<?php

include_once 'conductor_signup_errors_handler.php';

// signup form validation
$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);
$userName = trim($_POST['userName']);
$phoneNumber = trim($_POST['phoneNumber']);
$password = trim($_POST['password']);
$confirmPassword = trim($_POST['confirmPassword']);

// 
if (empty($firstName)) {
    $errors['firstName'] = "First Name is required";
} else if (!preg_match("/^[a-z ,.'-]+$/i", $firstName)) {
    $errors['firstName'] = ' First Name must be letters only';
} else {
    $firstName = htmlspecialchars($firstName);
}

if (empty($lastName)) {
    $errors['lastName'] = "Last Name is required";
} else if (!preg_match("/^[a-z ,.'-]+$/i", $lastName)) {
    $errors['lastName'] = 'Last Name must be letters only';
} else {
    $lastName = htmlspecialchars($lastName);
}

if (empty($userName)) {
    $errors['userName'] = "Username is required";
} else if (!preg_match("/^[a-z\d_]{2,20}$/i", $userName)) {
    $errors['userName'] = 'Username must be 2-20 characters long';
} else {
    $userName = htmlspecialchars($userName);
}

if (empty($phoneNumber)) {
    $errors['phoneNumber'] = "Phone number is required";
} else if (!preg_match("/^09\d{9}$/", $phoneNumber)) {
    $errors['phoneNumber'] = 'Phone number must start with 09 and be followed by 9 digits';
} else {
    $phoneNumber = htmlspecialchars($phoneNumber);
}

if (empty($password)) {
    $errors['password'] = "Password is required";
} else if (!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,16}$/", $password)) {
    $errors['password'] = 'Password must be 8-16 characters, including lowercase, uppercase, digit, and special sign (@#-_$%^&+=§!?)';
} else {
    $password = htmlspecialchars($password);
}

if (empty($confirmPassword)) {
    $errors['confirmPassword'] = "Confirm Password is required";
} else if ($password != $confirmPassword) {
    $errors['confirmPassword'] = 'Password and Confirm Password do not match';
} else {
    $confirmPassword = htmlspecialchars($confirmPassword);
}
