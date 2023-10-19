<?php

/*function Invaliduid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}*/
/*function invalidemail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=false;
    }else{
        $result=true;
    }
    return $result;
}*/


function emailpresent($con,$email){
    $sql="SELECT * from signupdata WHERE UserEmail=?;";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$email); 
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        mysqli_stmt_close($stmt);
        $result=false;
        return $result;
    }
}

function emailpresent1($con,$email){
    $sql="SELECT * from signupdata WHERE UserEmail=?; ";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$email); 
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultData) > 0) {
        mysqli_stmt_close($stmt);
        return false; // Email exists
    } else {
        mysqli_stmt_close($stmt);
        return true; // Email doesn't exist
    }
}

function uidpresent($con,$username){
    $sql="SELECT * from signupdata WHERE userUID=?;";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$username); 
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        mysqli_stmt_close($stmt);
        $result=false;
        return $result;
    }
}

function uidExits($con,$username,$email){
    $sql="SELECT * from signupdata WHERE userUID=? OR UserEmail=?;";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$username,$email); 
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        mysqli_stmt_close($stmt);
        $result=false;
        return $result;
    }
}

function PhoneNumberpresent($con,$phoneno){
    $sql="SELECT * from signupdata WHERE user_PhoneNo=?;";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$phoneno); 
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        mysqli_stmt_close($stmt);
        $result=false;
        return $result;
    }
}


function passwordempty($password){
    $result;
    if(empty($password)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function Loginuser($con,$username,$pwd){
    $uidExits=uidExits($con,$username,$username);
    if($uidExits === false){
        header("location:../login.php?error=Invalidusername");
        exit();
    }
    //$password='659';
    $hashPassword=$uidExits["userPassword"];
    //$check_password=password_verify($password,$hashPassword);
    if (password_verify($pwd, $hashPassword)) {
        if($username=="KumaraAdmin_M" && $pwd=="admin890"){
            session_start();
            $_SESSION["userID"]=$uidExits["userUID"];
            $_SESSION["username"]=$uidExits["userF_Name"];
            echo"<script>alert('You have entered in to the admin portal')</script>";
            header("location:../systemDash.php");
            exit();
        }
        else{
        //echo 'Password is valid!';
        session_start();
        $_SESSION["UID"]=$uidExits["UserID"];
        $_SESSION["userID"]=$uidExits["userUID"];
        $_SESSION["username"]=$uidExits["userF_Name"];
        $_SESSION["email"]=$uidExits["UserEmail"];
        $_SESSION["image"]=$uidExits["profileimage"];
        header("location:../index.php");
        exit();
        }
    } else {
        header("location:../login.php?error=password_Wrong");
        echo 'Invalid password.'.$pwd.$uidExits["userPassword"];
        echo"User name: ".$username;
        exit();
    }
    /*if($check_password===false){
        header("location:../login.php?error=wronglogin");
        exit();
    }else if($check_password===true){
        session_start();
        $_SESSION["userID"]=$uidExits["UserUID"];
        $_SESSION["username"]=$uidExits["UserName"];
        header("location:../index.php");
        exit();
    }*/
}

function changePassword($con, $email, $repassword) {
    // Hash the new password
    $hashedPassword = password_hash($repassword, PASSWORD_DEFAULT);

    // Prepare and execute the SQL query to update the password
    $sql = "UPDATE signupdata SET userPassword = ? WHERE UserEmail = ? ;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../changepassword.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $hashedPassword, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Redirect the user to a success page or display a success message
    header("Location: ../updatepass.php?error=Change_pass");
    exit();
}

function CreateUser($con,$name1,$name2,$gender,$age,$username,$email,$phoneno,$userpassword){
    /*$sql ="INSERT INTO new_signup (userName,userUID,UserEmail,userPassword) VALUES (?,?,?,?);";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    //$hashpwd=password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$name,$username,$email,$password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../index1RegisteredUser.php?error=none");*/
    //include_once 'singup.inc.php';
    if($gender==="Female"){
        $defaultimage="profileimages/defaultFemale.jpeg";
    }
    else if($gender==="Male"){
        $defaultimage="profileimages/defaultMale.jpg";
    }
    //$defaultimage="profileimages/default.png";
    $hashpassword=password_hash($userpassword,PASSWORD_DEFAULT);
    $stmt=$con->prepare("INSERT INTO signupdata (userF_Name,userL_Name,user_Gender,DOB,UserUID,UserEmail,user_PhoneNo,profileimage,userPassword) Values (?,?,?,?,?,?,?,?,?);");
    $stmt->bind_param("sssssssss",$name1,$name2,$gender,$age,$username,$email,$phoneno,$defaultimage,$hashpassword);
    $stmt->execute();
    header("location:../index1RegisteredUser.php?error=none");
}



function checkR_valid($conn,$r_date,$r_venue){
    $sql="SELECT * from reservation_data WHERE R_date=? AND R_venue=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$r_date,$r_venue); 
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        mysqli_stmt_close($stmt);
        $result=false;
        return $result;
    }
}

function createInquiry($con,$name,$number,$message,$email){
    session_start();
    echo"<h2>Connected successfully</h2><br>";
    if(isset($_SESSION["username"])){
        $answer="Pending";
        $uid=$_SESSION["UID"];
        $stmt=$con->prepare("insert into contact_us (C_Name,C_PhoneNo,C_Message,C_email,userID,answer) values (?,?,?,?,?,?)");
        $stmt->bind_param("ssssis",$name,$number,$message,$email,$uid,$answer);
        $stmt->execute();
    }
    else{
        $id=1;
        $stmt=$con->prepare("insert into contact_us (C_Name,C_PhoneNo,C_Message,C_email,userID) values (?,?,?,?,?)");
        $stmt->bind_param("ssssi",$name,$number,$message,$email,$id);
        $stmt->execute();
    }
    echo"<h3>Contact details stored successfully</h3>";
    header('Location:../ContactusConfirmation.php');
}

function createReservation($con,$r_date,$r_time,$r_number,$r_venue,$r_package,$r_phonenumber,$r_name,$r_email,$r_address,$total,$venue_id,$package_id){
    session_start();
    if(isset($_SESSION["username"])){
        $uid=$_SESSION["UID"];
        $status='pending';
        $stmt=$con->prepare("insert into reservation_data (R_date,R_time,No_Of_Guests,R_venue,R_package,Contact_Number,R_FullName,R_Email,R_address,total,userID,venue_id,package_id,status) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("sssssssssiiiis",$r_date,$r_time,$r_number,$r_venue,$r_package,$r_phonenumber,$r_name,$r_email,$r_address,$total,$uid,$venue_id,$package_id,$status);
        $stmt->execute();
        echo"<h3>Reservation details successfully stored</h3>";
        header("location:../confirmationReservation.php");
    }else{
        echo"Cannot make reservation without logging in";
    }
}
function update_reservation($con,$id,$r_date,$r_time,$r_number,$r_venue,$r_package,$r_phonenumber,$r_name,$r_email,$r_address,$total,$venue_id,$package_id){
    $sql="UPDATE reservation_data SET Reservation_ID=$id,R_date='$r_date',R_time='$r_time',No_Of_Guests=$r_number,R_venue='$r_venue',R_package='$r_package',Contact_Number='$r_phonenumber',R_FullName='$r_name',R_Email='$r_email',R_address='$r_address',total=$total,venue_id=$venue_id,package_id=$package_id,status='pending' where Reservation_ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"<script>alert('Updates successfully done')</script>";
        //header("location:../index.php");
    }
}

function createpayment($con,$cardno,$name,$expiaryDate,$id,$cvv,$amount,$status){
$userid=$_SESSION["UID"];
$sql="INSERT INTO payments(cardNo,Customer_name,P_expire,P_CVV,P_Amount,P_Status,RID,CID) VALUES ('$cardno','$name','$expiaryDate','$cvv','$amount','$status','$id','$userid');";
$result=mysqli_query($con,$sql);
if($result){
    echo"<script>alert('Payment details submitted successfully')</script>";
    //header("location:../index.php");
}
}
?>