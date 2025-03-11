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

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['changeEmail'])) {
            $newEmail = $_POST['newEmail'];
            $currentPassword = $_POST['currentPassword'];

            include 'settings_logic_handler.php';

            $passwordSQL = "SELECT password FROM jts_users WHERE id = ?";
            $passwordSTMT = $connection->prepare($passwordSQL);
            $passwordSTMT->bind_param('i', $isLogin);
            $passwordSTMT->execute();
            $result = $passwordSTMT->get_result();
            $userPassword = $result->fetch_assoc();

            if ($currentPassword === $userPassword['password']) {
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
            } else {
                echo 'Current password is incorrect';
            }
            $passwordSTMT->close();
        } elseif (isset($_POST['changePassword'])) {
            $currentPassword = $_POST['currentPassword'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];

            include 'settings_logic_handler.php';

            $passwordSQL = "SELECT password FROM jts_users WHERE id = ?";
            $passwordSTMT = $connection->prepare($passwordSQL);
            $passwordSTMT->bind_param('i', $isLogin);
            $passwordSTMT->execute();
            $result = $passwordSTMT->get_result();
            $userPassword = $result->fetch_assoc();

            if ($currentPassword === $userPassword['password']) {
                if ($newPassword === $confirmPassword){
                    $sql = "UPDATE jts_users SET password = ?, confirmPassword = ? WHERE id = ?";
                    $stmt = $connection->prepare($sql);
                    $stmt->bind_param('ssi', $newPassword, $confirmPassword, $isLogin);

                    if ($stmt->execute()) {
    ?>
                        <script>
                            Swal.fire({
                                title: "Successful Change Password!",
                                text: "Your password has been successfully updated",
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
            $passwordSTMT->close();
        }
        $connection->close();
    }
    ?>
</body>

</html>