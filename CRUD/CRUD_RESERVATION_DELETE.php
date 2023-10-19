<?php
include_once 'config.php';
$id=$_GET['deleteID'];
$sql="DELETE FROM reservation_data where Reservation_id=$id";
$result1=mysqli_query($conn,$sql);
if($result1){
    echo"Okay";
    header("location:CRUD_RESERVATION.php");
    exit();
}
else{
    echo"not okay";
}
?>