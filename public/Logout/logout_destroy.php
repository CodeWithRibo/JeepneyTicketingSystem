<?php
session_start();
session_destroy();

//CLEAR THE SESSION ON YOUR BROWSER
$_SESSION = array();


header("Location: home_page.php");
exit();
?>