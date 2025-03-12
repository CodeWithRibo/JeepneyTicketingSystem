<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Delete</title>
</head>

<body>
    <?php

    include '../Database/dbconfig.php';


    if (isset($_SESSION['user_id'])) {
        $isLogin = $_SESSION['user_id'];
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $sql = "DELETE FROM jts_users WHERE id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param('i', $isLogin);

        if ($stmt->execute()) {
    ?>
            <script>
                Swal.fire({
                    title: "Successfully Delete",
                    text: "Your Account has been successfully deleted",
                    icon: "success"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "../Logout/logout_destroy.php";
                    }
                });
            </script>
    <?php
        }
        $stmt->close();
        $connection->close();
    } else {
        echo 'Check error';
    }
    ?>
</body>

</html>