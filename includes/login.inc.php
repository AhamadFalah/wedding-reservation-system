<?php

if(isset($_POST["submit"])){

$username=$_POST["uid"];

$pwd=$_POST["password"];
//$pwd='123';

include_once 'databasehandle.inc.php';
include_once 'function.inc.php';

//LoginUser($con,$username,$password);
//$empty=passwordempty($password);
/*if($empty !== false){
    header("location:../login.php?error=passwordempty");
}*/
//echo"password: ".$password;
Loginuser($con,$username,$pwd);

}



else{
header("Location:./index.php");
echo"<h1>hello</h1>";
exit();
}

?>