<?php
include_once 'config.php';
$id=$_GET['deleteID'];
$sql="DELETE FROM payments where Payment_ID=$id";
$result1=mysqli_query($conn,$sql);
if($result1){
    echo"Okay";
    header("location:CRUD_TRANSACTION.php");
    exit();
}
else{
    echo"not okay";
}
?>