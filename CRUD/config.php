<?php
$servername='localhost';
$username='root';
$password='';
$databaseName='hotel_reservation_system_for_weddings';

$conn=new mysqli($servername,$username,$password,$databaseName);
if($conn->connect_error){
    die("Not okay").$conn->connect_error;
}
?>