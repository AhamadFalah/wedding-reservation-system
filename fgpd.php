<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
    <head> 
      <script src="Javascript/validateChangepassword.js"></script>
        <title> Change Password  </title>
 <style>
    p{
        color:gray;
    }
    .Subutton{
  background-color: #4CAF50;
  color: white;
  padding: 6px 15px;
  margin: 8px 0; 
  border: none;
  border-radius: 4px;
  cursor: pointer; 
}
.Subutton:hover{
	transform: scale(1.2);
	transition: 0.4s;
  box-shadow: 8px 8px 8px  black;
  }
 </style>
 
    </head>
    <body>
  <center>
    <br><br><br><br><br>
    <h1> FORGOT PASSWORD? </h1><br>
    <p>Enter your email and we will send a link to reset your password</p> <br>

    <form action="includes/changepass.php" method="post" onsubmit="return checkpassword()"> 
    <input type="text" name="fpmail"placeholder="Enter Email" style="width: 300px"> <br/><br>
    <input type="password" name="fpassword"placeholder="password" style="width: 300px" id="pass1"> <br/><br>
    <input type="password" name="fconfirmpass"placeholder="confirm password" style="width: 300px" id="pass2"> <br/><br>
    <input type="submit" class="Subutton" value="send" name="submit">

  </form>
  <br><br><br><br><br><br><br>
  </center>
  <?php
  if(isset($_POST["submit"])){
    $result=$_GET["error"];
    if($_GET["error"]=="Email_invalid"){
      echo"<p style='color:red;'>Invalid email</p>";
    }
  }
  ?>

    </body>
</html>

<?php
include_once 'footer.php';
?>
 
