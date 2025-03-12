<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings change email</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include '../Database/dbconfig.php';

    if (isset($_SESSION['user_id'])) {
        $isLogin = $_SESSION['user_id'];
    }

    $validation = ['email' => ""];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['changeEmail'])) {
            $newEmail = $_POST['newEmail'];

            if (empty($newEmail)) {
                $validation['email'] = "Please enter your Email";
            } else if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
                $validation['email'] = "Invalid email format";
            }

            if (!array_filter($validation)) {
                $sql = "UPDATE jts_users SET email = ? WHERE id = ?";
                $stmt = $connection->prepare($sql);
                $stmt->bind_param('si', $newEmail, $isLogin);
                if ($stmt->execute()) {
    ?>
                    <script>
                        Swal.fire({
                            title: "Successful Change Email Address!",
                            text: "Your email address has been successfully updated",
                            icon: "success"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "../include/settings.php";
                            }
                        });
                    </script>
    <?php
                }
                $stmt->close();
            }
        }
    }
    ?>
</body>

</html>