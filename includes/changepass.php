
<?php
if(isset($_POST["submit"])){
    $email=$_POST["fpmail"];
    $repassword=$_POST["fpassword"];
    
    include 'databasehandle.inc.php';
    include 'function.inc.php';
    echo $email;
    $emailexit1=emailpresent1($con,$email);
    if($emailexit1 !== false){
        header("location:../fgpd.php?error=Email_invalid");
        exit();
    }
    changePassword($con,$email,$repassword);
    //$passwordreset=passwordreset($con,$email);
}
else{
    header("location:../index.php");
    exit();
}
?>
