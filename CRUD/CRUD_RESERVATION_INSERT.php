<?php
$date = $_POST["R_Date"];
$email = $_POST["R_Email"];
$phoneNo = $_POST["R_PhoneNo"];
$guest = $_POST["No_Guest"];
$amount = $_POST["R_Amount"];
$status = $_POST["R_Status"];
$packageId = $_POST["PID"];
$venueId = $_POST["VID"];
$customerId = $_POST["CID"];
include 'config.php';
include 'CRUD_FUNCTIONS.php';
create_reservation($conn,$id,$date,$email,$phoneNo,$guest,$amount,$status,$packageId,$venueId,$customerId)
?>