<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Contact Process</title>
</head>
<body>
    
<?php 
include_once '../Database/dbconfig.php';
include_once '../handler/errors_handler.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    if(empty($firstName) || empty($lastName) || empty($email) || empty($subject) || empty($message)){
       ?> 
        <script>
            Swal.fire({
                title: "Failed Submit",
                text: "Please fill in all fields",
                icon: "info"
            }).then((result) => {
                if(result.isConfirmed) {
                    window.location = 'contact.php';
                }
            });
        </script>
       <?php
    }

    // Validation



}
?>

</body>
</html>