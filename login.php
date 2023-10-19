<?php
include_once 'header.php';
?>

<div class="loginform">
  <script src="Javascript/ValidateLoginForm.js"></script>

    <center><img src="images/LOGO.png" alt=""></center>

<form action="includes/login.inc.php" method="post" onsubmit="return  ValidateLogindata()">
    <label for="Username">Username</label>
    <input type="text" id="username" name="uid" placeholder="Enter Username/Email">
    <label>Password</label>
    <input type="password" id="username" name="password" placeholder="Enter Username/Email">
  <button class="Submitbutton" name="submit" type="submit" value="Log in">Log in</button>
</form>
</div>
<p>Dont have an account?<a href="singup.php">Sign up.NOW!</a></p>
<p><a href="fgpd.php">Forget password</a></p>
<?php
if(isset($_GET["error"])){
if($_GET["error"]=="Invalidusername"){
    echo "<p style='color:red;' >Invalid username enter again</p>";
}
else if($_GET["error"]=="password_Wrong"){
  echo"<p style='color:red;'>Incorrect password</p>";
}
}?>
<?php
include_once 'footer.php';
?>