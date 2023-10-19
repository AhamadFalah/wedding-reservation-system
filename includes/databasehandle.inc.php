<?php

$serverName="localhost";
$userName="root";
$password="";
$databsename="hotel_reservation_system_for_weddings";

$con=new mysqli($serverName,$userName,$password,$databsename);

if($con->connect_error){
    die("Connection falied".$con->connect_error);
}
else{
    //echo"<h1>Successfully connected</h1>";
}