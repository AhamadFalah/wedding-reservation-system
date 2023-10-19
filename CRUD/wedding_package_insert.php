<?php
$name=$_POST["p_name"];
$price=$_POST["p_price"];
include 'config.php';
include 'fucntions.php';
createPackage($conn,$name,$price);
?>