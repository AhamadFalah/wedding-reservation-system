<?php
$id=$_GET["deleteID"];
include_once 'config.php';
$sql="DELETE FROM contact_us WHERE Contact_ID=$id";
$result=mysqli_query($conn,$sql);
if($result){
    echo"Success";
    header("location:displayinquiry.php");
}
?>