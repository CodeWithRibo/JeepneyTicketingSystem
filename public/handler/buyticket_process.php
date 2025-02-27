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

if($_SERVER["REQUEST_METHOD"] == "POST") {

        //VALIDATION
        include '../handler/buyticket_logic_handler.php';

      if(!array_filter(array: $buyticketErrors)) {
        //CHECK IF TICKET NUMBER ALREADY EXIST
        $checksql = "SELECT * FROM process_buyticket WHERE ticketNumber = ?"; 
        $stmt = $connection -> prepare($checksql);
        $stmt -> bind_param("s", $ticketNumber);
        $stmt -> execute();
        $result = $stmt -> get_result();      
      
         if($result -> num_rows > 0) {
          echo 'ticket number already exist';
         } else {
          // INSERT PASSENGER DETAILS INTO DATABASE
          $sql = "INSERT INTO process_buyticket (firstName, lastName, email, phoneNumber, dateAndTime, passengersCount, PassengersWithDiscount, optionOrigin, optionDestinations, ticketNumber, farePrice) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

          $insertData = $connection -> prepare($sql);
          $insertData -> bind_param("sssssssssss", $firstName, $lastName, $email, $phoneNumber, $dateAndTime, $passengersCount, $PassengersWithDiscount, $optionOrigin, $optionDestinations, $ticketNumber, $farePrice);
          
         if($insertData -> execute()) {
          ?>
<script> 
        Swal.fire({
            title: "Success Buy Ticket!",
            text: "Your ticket has been successfully booked. Click Ok to proceed to payment.",
            icon: "success",
            showConfirmButton: true,
          }).then(() => {
                   window.location.href = "../include/buy_ticket.php";
                  });
    </script>
          <?php
          exit();
         }

      }
      $insertData -> close();
        $stmt -> close(); 
        $connection -> close();        
 } 
  
}
?>
</body>
</html>