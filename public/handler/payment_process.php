<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Process</title>
</head>

<body>
    <?php
    include '../Database/dbconfig.php';
    session_start();


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $passengerFirstName = $_POST['passengerNameFirstname'];
        $passengerLastName = $_POST['passengerNameLastname'];
        $passengerEmail = $_POST['passengerEmail'];
        $passengerPhonenumber = $_POST['passengerPhonenumber'];
        $passengerOrigin = $_POST['passengerOrigin'];
        $passengerDestination = $_POST['passengerDestination'];
        $passengerDateAndTime = $_POST['passengerDateAndTime'];
        $numberPassenger = $_POST['numberPassenger'];
        $numberPassengerDiscount = $_POST['numberPassengerDiscount'];
        $passengerTicketNumber = $_POST['passengerTicketNumber'];

        $_SESSION['passengerFirstName'] = $passengerFirstName;
        $_SESSION['passengerLastName'] = $passengerLastName;
        $_SESSION['passengerEmail'] = $passengerEmail;
        $_SESSION['passengerPhonenumber'] = $passengerPhonenumber;
        $_SESSION['passengerOrigin'] = $passengerOrigin;
        $_SESSION['passengerDestination'] = $passengerDestination;
        $_SESSION['passengerDateAndTime'] = $passengerDateAndTime;
        $_SESSION['numberPassenger'] = $numberPassenger;
        $_SESSION['numberPassengerDiscount'] = $numberPassengerDiscount;
        $_SESSION['passengerTicketNumber'] = $passengerTicketNumber;
    }


    ?>
</body>

</html>