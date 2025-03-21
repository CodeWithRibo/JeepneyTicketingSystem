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
        //REFLECT THE ISSUE TICKET BASE ON SEARCH ACCOUNT
        $user_id = $_POST['user_id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $passengersCount = $_POST['passengersCount'];
        $PassengersWithDiscount = $_POST['PassengersWithDiscount'];
        //TODO
        //! FIX VALIDATION FOR SUBMITING TICKET
        if (empty($user_id) || empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber) || empty($passengersCount) || empty($PassengersWithDiscount)) {

    ?>
            <script>
                Swal.fire({
                    title: "",
                    text: "That thing is still around?",
                    icon: "question"
                })
            </script>
    <?php

            exit;
        } else {
            $sql = "INSERT INTO process_buyticket (user_id, firstName, lastName, email, phoneNumber, passengersCount, PassengersWithDiscount) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmtData = $connection->prepare($sql);
            $stmtData->bind_param('issssss', $user_id, $fistName, $lastName, $email, $phoneNumber, $passengersCount, $PassengersWithDiscount);
            $stmtData->execute();


            if ($stmtData->affected_rows > 0) {
                echo 'Succesfully addded ticket ' . $user_id;
            } else {
                echo 'not added';
            }
        }
        $stmtData->close();
    }
    ?>
</body>

</html>