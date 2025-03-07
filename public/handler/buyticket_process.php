<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Ticket Process</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php

  include '../Database/dbconfig.php';

  session_start();
  if (!isset($_SESSION['user_id'])) {
    header('Location: ../Logout/home_page.php');
    exit();
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //VALIDATION
    include '../handler/buyticket_logic_handler.php';

    if (!array_filter(array: $buyticketErrors)) {
      //CHECK IF TICKET NUMBER ALREADY EXIST
      $checksql = "SELECT * FROM process_buyticket WHERE ticketNumber = ?";
      $stmt = $connection->prepare($checksql);
      $stmt->bind_param("s", $ticketNumber);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
        echo 'ticket number already exist';
      } else {
        // INSERT PASSENGER DETAILS INTO DATABASE

        $userId = $_SESSION['user_id']; //RETRIEVE USER ID FROM SESSION BASE ON USER'S LOGIN

        $sql = "INSERT INTO process_buyticket (user_id, firstName, lastName, email, phoneNumber, dateAndTime, passengersCount, PassengersWithDiscount, optionOrigin, optionDestinations, ticketNumber, farePrice, regularPrice, discountedPrice, totalFarePrice) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $insertData = $connection->prepare($sql);
        $insertData->bind_param("issssssssssssss", $userId, $firstName, $lastName, $email, $phoneNumber, $dateAndTime, $passengersCount, $PassengersWithDiscount, $optionOrigin, $optionDestinations, $ticketNumber, $farePrice, $regularPrice, $discountedPrice, $totalFarePrice);
      
        if ($insertData->execute()) {
  ?>
          <script>
            Swal.fire({
              title: "Success Buy Ticket!",
              text: "Your ticket has been successfully booked. Click Ok to proceed to payment.",
              icon: "success",
              showConfirmButton: true,
            }).then(() => {
              window.location.href = "../include/transaction_payment.php";
            });
          </script>
  <?php
          exit();
        }
      }
      $insertData->close();
      $stmt->close();
      $connection->close();
    }
    
  }
  ?>
</body>

</html>