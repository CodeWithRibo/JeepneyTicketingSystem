
<?php 

    $localhost = "localhost";
    $username = "riboluna";
    $password = "riboluna";
    $dbName = "jts_conductor";

    $connection = mysqli_connect($localhost,$username,$password,$dbName);

    if($connection -> connect_error) {
        die("Connection failed:  $connection -> connect_error ");
    }

?>