<?php
$servername="localhost";
$username="root";
$password="";
$databasename="reservation";
$conn=new mysqli($servername,$username,$password,$databasename);

//Check connection
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}else{
    echo"Successfully connected!";
}
?>