<?php
session_start();
session_destroy();


$_SESSION = array();


header("Location: home_page.php");
exit();
?>