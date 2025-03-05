<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>
    <?php
    include '../Database/dbconfig.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        include '../handler/contact_logic_handler.php';
        ob_start();
        // Validation
        if (!array_filter($contactErrors)) {
            $userId = $_SESSION['user_id'];
            // if no errors proceed to the db
            $sqlContact = "INSERT INTO contact (firstName, lastName, email, subject, message, user_id) VALUES (?, ? , ? , ? , ? , ? )";
            $insertContact = $connection->prepare($sqlContact);
            $insertContact->bind_param("sssssi", $firstName, $lastName, $email, $subject, $message, $userId);
            if ($insertContact->execute()) {
    ?> <script>
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Your message has been submitted",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location = '../include/home_page.php';
                    });
                </script> <?php
                            exit();
                        }
                        $insertContact->close();
                        $connection->close();
                    }
                    ob_end_flush();
                }
                            ?>
</body>

</html>