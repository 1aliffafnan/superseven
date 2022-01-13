<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: customerlogin.php");
exit(); }
?>
