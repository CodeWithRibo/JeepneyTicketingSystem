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
        $farePrice = $_POST['farePrice'];
        $regularPrice = $_POST['regularPrice'];
        $discountedPrice = $_POST['discountedPrice'];
        $totalFarePrice = $_POST['totalFarePrice'];

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
        $_SESSION['farePrice'] = $farePrice;
        $_SESSION['regularPrice'] = $regularPrice;
        $_SESSION['discountedPrice'] = $discountedPrice;
        $_SESSION['totalFarePrice'] = $totalFarePrice;

        //CONVERTING CENT TO PESO
        $_SESSION['convertTotalFarePrice'] =  intval($totalFarePrice) * 100;
    }
    ?>
</body>

</html>