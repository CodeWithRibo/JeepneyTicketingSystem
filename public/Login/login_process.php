<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include '../Database/dbconfig.php';

    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST["userName"];
        $password = $_POST["password"];

        // check if username and password are  empty
        if (empty($userName) || empty($password)) {
    ?>
            <script>
                Swal.fire({
                    title: "Login Failed",
                    text: "Please enter both username and password",
                    icon: "error"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'login.php';
                    }
                });
            </script>
        <?php

            exit;
        }
        // retrieve data in the database base on the username and password
        $sqlUsername = "SELECT id, userName, password FROM jts_users WHERE userName = ?";
        $checkUserNameStmt = $connection->prepare($sqlUsername);
        $checkUserNameStmt->bind_param("s", $userName);
        $checkUserNameStmt->execute();
        $result = $checkUserNameStmt->get_result();
        // get the result by single row and store it in $user
        $user = $result->fetch_assoc();

        // verify the password
        if ($user && $password === $user['password']) {
            // store the user id in the session
            $_SESSION["user_id"] = $user['id'];
            $_SESSION["user_name"] = $user['userName'];
        } else {
            // authentication failed
        ?>
            <script>
                Swal.fire({
                    title: "Login Failed",
                    text: "Invalid username or password",
                    icon: "error"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'login.php';
                    }
                });
            </script>
    <?php
            exit;
        }
    }
    $connection->close();
    ?>

</body>

</html>