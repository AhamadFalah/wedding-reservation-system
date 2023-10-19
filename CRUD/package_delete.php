<?php
$id=$_GET["deleteID"];
include_once 'config.php';
$sql="DELETE FROM wedding_package where package_ID=$id ";
$result=mysqli_query($conn,$sql);
if($result){
    echo"Okay";
    header("location:DisplayPackage.php");
    //exit();
}
else{
    echo"Not okay";
}
?>