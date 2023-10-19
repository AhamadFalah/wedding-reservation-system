<?php
include_once 'config.php';
$id=$_GET['deleteID'];
$sql="DELETE FROM wedding_venue where venue_id=$id";
$result1=mysqli_query($conn,$sql);
if($result1){
    echo"Okay";
    header("location:display.php");
    exit();
}
else{
    echo"not okay";
}
?>