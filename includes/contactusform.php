<?php
$name=$_POST["Contact_name"];
$email=$_POST["Contact_email"];
$number=$_POST["Contact_Number"];
$message=$_POST["Conatact_message"];

include 'databasehandle.inc.php';
include 'function.inc.php';
//($name,$number,$message,$email);
//Check connection
createInquiry($con,$name,$number,$message,$email);
/*if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
else{
    echo"<h2>Connected successfully</h2><br>";
    $stmt=$conn->prepare("insert into contact_us (C_Name,C_PhoneNo,C_Message,C_email) values (?,?,?,?)");
    $stmt->bind_param("ssss",$name,$number,$message,$email);
    $stmt->execute();
    echo"<h3>Contact details stored successfully</h3>";
    header('Location:../ContactusConfirmation.php');
}*/
?>