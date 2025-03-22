<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Save ticket</title>
</head>

<body>
    <?php

    include '../Database/dbconfig.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        include '../handler/conductor_save_ticket_handler.php';

        if (array_filter($ticketValidation)) {
    ?>
            <script>
                Swal.fire({
                    title: "Please fillout all fields",
                    text: "Fill all the blank",
                    icon: "error"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'conductor_issueTicket.php';
                    }
                });
            </script>
            <?php
            exit;
        } else {
            $sql = "INSERT INTO process_buyticket (user_id, firstName, lastName, email, phoneNumber, passengersCount, PassengersWithDiscount, ticketNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmtData = $connection->prepare($sql);
            $stmtData->bind_param('isssssss', $user_id, $firstName, $lastName, $email, $phoneNumber, $passengersCount, $PassengersWithDiscount, $randomTicketNumber);
            $stmtData->execute();


            if ($stmtData->affected_rows > 0) {
            ?>
                <script>
                    Swal.fire({
                        title: "Added Sucess",
                        text: "Successfully issue a ticket",
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = 'conductor_issueTicket.php';
                        }
                    });
                </script>
    <?php
            } else {
                echo 'not added';
            }
        }
        $stmtData->close();
    }
    ?>
</body>

</html>