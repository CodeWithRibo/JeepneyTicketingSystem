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
          $sql = "INSERT INTO process_buyticket (firstName, lastName, email, phoneNumber, dateAndTime, passengersCount, PassengersWithDiscount, optionOrigin, optionDestinations, ticketNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

          $insertData = $connection -> prepare($sql);
          $insertData -> bind_param("ssssssssss", $firstName, $lastName, $email, $phoneNumber, $dateAndTime, $passengersCount, $PassengersWithDiscount, $optionOrigin, $optionDestinations, $ticketNumber);
          
         if($insertData -> execute()) {
          header('Location: ../include/buy_ticket.php');
          exit();
         }

      }
      $insertData -> close();
        $stmt -> close(); 
        $connection -> close();        
 } 
  
}


?>