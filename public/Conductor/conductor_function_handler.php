<?php
include '../Database/dbconfig_conductor.php';

// Username
function existUserName()
{
    global $connection;
    global $userName;

    $sqlUserName = "SELECT * FROM conductor_account  WHERE userName = ?";
    $userNameStmt = $connection->prepare($sqlUserName);
    $userNameStmt->bind_param("s", $userName);
    $userNameStmt->execute();
    $userNameStmt->store_result();

    if ($userNameStmt->num_rows > 0) {
    ?>
        <script>
            Swal.fire({
                title: "Username is already Registered",
                text: "This Username is already in use. Please log in or use 'Forgot Password'.",
                icon: "info"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'conductor_signup.php';
                }
            });
        </script>
    <?php
        exit();
    }
}
function existPhoneNumber()
{
    global $connection;
    global $phoneNumber;


    $sqlPhoneNumber = "SELECT * FROM conductor_account  WHERE phoneNumber = ?";
    $phoneNumberStmt = $connection->prepare($sqlPhoneNumber);
    $phoneNumberStmt->bind_param("s", $phoneNumber);
    $phoneNumberStmt->execute();
    $phoneNumberStmt->store_result();


    if ($phoneNumberStmt->num_rows > 0) {
    ?>
        <script>
            Swal.fire({
                title: "Phone Number is already Registered",
                text: "Try different phone number.",
                icon: "info"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'conductor_signup.php';
                }
            });
        </script>
<?php
        exit();
    }
}

?>