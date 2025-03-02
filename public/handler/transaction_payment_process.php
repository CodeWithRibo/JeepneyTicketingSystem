<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Payment Process</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php 
include '../Database/dbconfig.php';
    
$rows = [];

    $transactionData = "SELECT * FROM process_buyticket";
    $stmt = $connection->prepare($transactionData);
    $stmt->execute();
    $result = $stmt->get_result();
    
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        //DELETE TRANSACTION RECORD BASE ON ID
        if(isset($_POST['delete'])) {
            $id_to_delete = $_POST['id_to_delete'];
            $deleteID = "DELETE FROM process_buyticket WHERE id = ?";
            $stmt = $connection->prepare($deleteID);
            $stmt->bind_param('i', $id_to_delete);
            $stmt->execute();
            
            if($stmt->execute()) { 
                   ?>
                    <script>
                   Swal.fire({
                    title: "Transaction Payment",
                    text: "Transaction Record Deleted Successfully",
                    icon: "success"
                    }).then(function(){
                        window.location.href = "transaction_payment.php";
                    });
                   </script>
                   <?php 
                   
            }
        }

    $stmt->close();
    $connection->close();

?>

</body>
</html>