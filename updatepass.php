
<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>  Password Changed  </title>
    </head>
    <style>
        .Subutton{
  background-color: #4CAF50;
  color:white;
  padding: 8px 11px;
  margin: 8px 0; 
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right:15px;
}
.Subutton:hover{
	transform: scale(1.2);
	transition: 0.4s;
    box-shadow: 8px 8px 8px  black;
  }
a{
    text-decoration: none;
}
    </style>
    <body>
  <center>
    
    <br><br><br><br>
    <h1> CHANGE PASSWORD </h1> <br>
<img src="images/tik.png"> </img>
<h2>Password Successfully Changed!</h2>
<br>
<a href="login.php"> <button class="Subutton">login</button></a>
<br><br><br>

</center>

    </body>
</html>

<?php
include_once 'footer.php';
?>