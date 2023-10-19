<?php

include_once 'header.php';

?>


<html>
    <head> 
        <title> Change Password </title>
    </head>
    <body>
        <script src="Javascript/validateChangepassword.js">
        </script> 
        <style>
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
   
  <center>
    <br><br><br><br>
    <h1> CHANGE PASSWORD </h1> <br>
 <form action="includes/changepass.php" method="post"  onsubmit = "return checkpassword()" >
    <input type="password" name="newpd"placeholder="Enter New Password" style="width: 300px" id="pass1" required> <br> <br> 
    <input type="password" name="cnewpd"placeholder="Confirm Password" style="width: 300px" id="pass2" required> <br/> <br/> <br/>
    <input type="submit" value="Update Password" name="submitbtn1" class="Subutton">

</form>
<br><br><br><br>
</center>


    </body>
</html>

<?php
include_once 'footer.php';
?>