<?php
    include_once '../Database/dbconfig.php';
    include_once '../handler/logic_handler.php';
    
// Email

function existEmail() {
    global $connection;
    global $email;

    $sqlEmail = "SELECT * FROM jts_users WHERE email = ?";
    $checkEmailStatement = $connection -> prepare($sqlEmail);
    $checkEmailStatement -> bind_param("s", $email);
    $checkEmailStatement -> execute();
    $checkEmailStatement -> store_result();

if($checkEmailStatement -> num_rows > 0) {
?> 
<script>
 Swal.fire({
         title: "Email is already Registered",
         text: "This email is already in use. Try different email or log in.",
         icon: "info"
  }).then((result) => {
             if (result.isConfirmed) {
                 window.location = 'signup.php';
             }
         });
</script>
<?php
 exit();
}
}
// Username
function existUserName() {
    global $connection;
    global $userName;

    $sqlUserName = "SELECT * FROM jts_users WHERE userName = ?";
    $userNameStmt = $connection -> prepare($sqlUserName);
    $userNameStmt -> bind_param("s", $userName);
    $userNameStmt -> execute();
    $userNameStmt -> store_result();

    if($userNameStmt -> num_rows > 0 ) {
        ?> 
        <script>
          Swal.fire({
                  title: "Username is already Registered",
                  text: "This Username is already in use. Please log in or use 'Forgot Password'.",
                  icon: "info"
           }).then((result) => {
                      if (result.isConfirmed) {
                          window.location = 'signup.php';
                      }
                  });
        </script>
        <?php
          exit();
    }
}

function existPhoneNumber() {
    global $connection;
    global $phoneNumber;


    $sqlPhoneNumber = "SELECT * FROM jts_users WHERE phoneNumber = ?";
    $phoneNumberStmt = $connection -> prepare($sqlPhoneNumber);
    $phoneNumberStmt -> bind_param("s", $phoneNumber);
    $phoneNumberStmt -> execute();
    $phoneNumberStmt -> store_result();
    
    
    if($phoneNumberStmt -> num_rows > 0 ) {
        ?> 
        <script>
          Swal.fire({
                  title: "Phone Number is already Registered",
                  text: "Try different phone number.",
                  icon: "info"
           }).then((result) => {
                      if (result.isConfirmed) {
                          window.location = 'signup.php';
                      }
                  });
        </script>
        <?php
          exit();
    }

}

?>