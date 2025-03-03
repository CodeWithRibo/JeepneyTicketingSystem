<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include_once '../Database/dbconfig.php';
    // check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //validation and sanitization
        include '../handler/signup_logic_handler.php';

        if (!array_filter($errors)) {
            include '../handler/function_handler.php';
            echo existEmail();
            echo existUserName();
            echo existPhoneNumber();

            // check if there are no errors proceed to the database
            // insert data to the database
            $sqlUsers = "INSERT INTO jts_users (firstName, lastName, userName, email, phoneNumber, password, confirmPassword) VALUES ( ? , ? , ? , ? , ? , ? , ? )";
            $insertUsers = $connection->prepare($sqlUsers);
            $insertUsers->bind_param("sssssss", $firstName, $lastName, $userName, $email, $phoneNumber, $password, $confirmPassword);

            //  check if the data is inserted
            if ($insertUsers->execute()) {
                header('Location: ../Login/login.php');
                exit();
            }

            $checkEmailStatement->close();
            $userNameStmt->close();
            $phoneNumberStmt->close();
            $insertUsers->close();
        }
    }


    ?>
</body>

</html>