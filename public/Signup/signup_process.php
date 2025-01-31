<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Process</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include '../Database/dbconfig.php';
include '../handler/errors_handler.php';

    // check if the form has been submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
            // call the logic Handler
            include '../handler/function_handler.php';

            if(array_filter($errors)) {
                // something shit
            } 
              
            else {
                // check if there are no errors proceed to the database
                require '../handler/function_handler.php';
                echo existEmail();
                echo existUserName();
                echo existPhoneNumber();

        // insert data to the database
     
        $sqlUsers = "INSERT INTO jts_users (firstName, lastName, userName, email, phoneNumber, password, confirmPassword) VALUES ( ? , ? , ? , ? , ? , ? , ? )"; 
        $insertUsers = $connection -> prepare($sqlUsers);
        $insertUsers -> bind_param("sssssss",$firstName, $lastName, $userName, $email, $phoneNumber, $password, $confirmPassword);   

        //  check if the data is inserted
        if($insertUsers -> execute()) {
            header('Location: ../Login/login.php');
            exit();
        }
    
        $checkEmailStatement -> close();
        $userNameStmt -> close();
        $phoneNumberStmt -> close();
        $insertUsers -> close();

        }
    }
    
  
?>
</body>
</html>