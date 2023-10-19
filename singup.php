<?php
include_once 'header.php'
?>
    <center><img src="images/LOGO.png" alt=""></center>
<div class="registraionform">
    <script src="Javascript/SignUpValidateusercredentials.js"></script>
<form action="includes/singup.inc.php" method="post" onsubmit="return validateUserCredentails()" enctype="multipart/form-data">
    <label for="Name">Enter full name</label>
    <input type="text" id="fname" name="user_name1" placeholder="First name">     
    <input type="text" id="lname" name="user_name2" placeholder="Last name">
    <label for="age">Enter date of birth</label>
    <input type="date" id="age" name="age" placeholder="Age">
    <label for="gender">Gender</label>
    <select name="gendervalue" id="genderselect">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <label for="Email">Enter Email</label>
    <input type="email" id="email" name="user_Email" placeholder="Email">
    <label for="Email">Enter Phonenumber</label>
    <input type="text" id="phonumber" name="user_phoneNumber" placeholder="number">
    <label for="Username">Username</label>
    <input type="text" id="username" name="Uid" placeholder="Enter Username/Email">
    <label for="password">Password</label>
    <input type="password" name="password" id="pwd1" placeholder="Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
    <label for="confirmpassword">Confirm password</label>
    <input type="password" name="confrimpassword" id="pwd2" placeholder="Confirm password">
    <input type="submit" id="submitbtn" name="submitbtn" value="Submit form"> <input type="reset" id="resetbtn" value="reset">
</form>
</div>
<?php
if(isset($_GET["error"])){
if($_GET["error"]=="UserName_Alreadyexists"){
    echo "<p style='color:red;'>Username or email already in use</p>";
}
else if($_GET["error"]=="UserName_Alreadyexists"){
    echo "<p style='color:red;'>Username already taken</p>";
}
else if($_GET["error"]=="Email_already_in_use"){
    echo "<p style='color:red;'>Email already taken</p>";
}
else if($_GET["error"]=="Phone_Already_in_use"){
    echo "<p style='color:red;'>Phone number already in use</p>";
}
}?>
<p>Already have an account?<a href="login.php">Log in.NOW!</p>
<?php
include_once 'footer.php';
?>