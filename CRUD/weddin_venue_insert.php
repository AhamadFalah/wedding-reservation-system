<?php
$name=$_POST["Venue_name"];
$type=$_POST["V_type"];
$capacity=$_POST["V_capacity"];
$price=$_POST["price_per_event"];

include_once 'config.php';
include_once 'fucntions.php';
$venue=create_venue($conn,$name,$type,$capacity,$price);

?>