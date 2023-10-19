<?php

if(isset($_POST["submitbtn"])){

$name1=$_POST["user_name1"];
$name2=$_POST["user_name2"];
$age=$_POST["age"];
$gender=$_POST["gendervalue"];
$email=$_POST["user_Email"];
$phoneno=$_POST["user_phoneNumber"];
$username=$_POST["Uid"];
$userpassword=$_POST["password"];
//$image1=$_FILES["img"]["name"];
//$image_size=$_FILES["img"]["size"];
//$image_temp_name=$_FILES["img"]["tmp_name"];
//$image_folder="/includes".$image1;
/*$fileext=explode(".",$image1);
$fileactualextension=strtolower(end($fileext));
$allowed=array("jpg","jpeg","pdf","png");
if(in_array($fileactualextension,$allowed)){
    echo"Correct file type ";
    if($file_error === 0){
        if($file_size<100000000000000){
            echo" file is within the limit";
            $newfilename=uniqid("",true).".".$fileactualextension;
            $fileDestination='uploads/'.$newfilename;
            move_uploaded_file($filetemplocation,$fileDestination);
            header("Loaction:file.php?uploadsucess");
        }else{
            echo " file size exceeded";
        }
    }
    else{
        echo " There was an error uploading your file";
    }
}
else{
    echo " Invalid file type";
}*/
//move_uploaded_file($image_temp_name,$image_folder);
include_once 'function.inc.php';
include 'databasehandle.inc.php';

//$invlaidUid=Invaliduid($username);
//$invalidEmail=invalidemail($email);
$uidExits=uidpresent($con,$username);
$emailpresent=emailpresent($con,$email);
$uidExits=uidExits($con,$username,$email);
$phoneno_Present=PhoneNumberpresent($con,$phoneno);
/*if($invlaidUid !=== false){
    header('Location:../signup.php?error=invalidUid');
    exit();
}*/
/*if($invalidEmail !== false){
    echo "<script>alert('Invalid Email')</script>";
    exit();
}*/
if($uidExits !== false){
    header("Location:../singup.php?error=UserName_Alreadyexists");
    echo"<script>alert('Username already exist enter new one')</script>";
    exit();
}
if($emailpresent !== false){
    header("Location:../singup.php?error=Email_already_in_use");
    echo"<script>alert('Username already exist enter new one')</script>";
    exit();
}
if($phoneno_Present !== false){
    header("Location:../singup.php?error=Phone_Already_in_use");
    exit();
}
/*if($image_size>200000){
    header("location:../singup.php?error=image_too_large");
    exit();
}*/
/*CreateUser($conn,$name,$username,$email,$password);*/
CreateUser($con,$name1,$name2,$gender,$age,$username,$email,$phoneno,$userpassword);

}

else{
header('Location:../index.php');
exit();
}