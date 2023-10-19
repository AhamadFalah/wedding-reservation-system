<?php
$id=$_GET["updateID"];
include_once 'config.php';
include_once 'fucntions.php';
$sql="SELECT * FROM contact_us where Contact_ID=$id";
$result=mysqli_query($conn,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $userid=$row["userID"];
    $name=$row["C_Name"];
    $phone=$row["C_PhoneNo"];
    $message=$row["C_Message"];
    $date=$row["Contact_date"];
    $email=$row["C_email"];
    $answer=$row["answer"];
}
if(isset($_POST["update"])){
    //$userid=$row["userID"];
    $name=$_POST["Contact_name"];
    $phone=$_POST["Contact_Number"];
    $message=$_POST["Conatact_message"];
    //$date=$_POST["Contact_date"];
    $email=$_POST["Contact_email"];
    $Admin_answer=$_POST["answer"];
    updateinquiry($conn,$id,$name,$phone,$message,$email,$userid,$Admin_answer);
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding_venuesEditForm</title>
    <style>
      .Admin_p {
                display: flex;
                justify-content: space-between;
                max-width: 500px;
                margin: 0 auto;
                margin-top: 20px;
                padding: 40px;
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 20px;
            }
    
            .Admin_p fieldset {
                border: none;
                padding: 0;
                margin-bottom: 20px;
                flex: 1;
            }
    
            .Admin_p legend {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }
    
            .Admin_p label {
                display: block;
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 8px;
                text-align: left;
            }
    
            .Admin_p input[type="text"],
            .Admin_p input[type="email"],
            .Admin_p input[type="number"],
            .Admin_p select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                margin-bottom: 20px;
            }
    
            .Admin_p input[type="submit"],
            .Admin_p input[type="reset"] {
                background-color: green;
                color: #fff;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border-radius: 4px;
                margin-left: 5px;
            }
    
            .Admin_p[type="submit"]:hover,
            .Admin_p[type="reset"]:hover {
                background-color: lightgreen;
            }
    </style>
  </head>
  <body>
  <div class="Admin_p">
             <fieldset>
                <legend>Inquiry</legend>
                <form method="post" action="">
                    <label>Name: </label>
                    <input type="text" name="Contact_name" id="contact_name"value=<?php echo $name?>><br>
                    <label>Email</label>
                    <input type="email" name="Contact_email" id="contact_email"value=<?php echo $email?>><br>
                    <label>Phone number:</label>
                    <input type="text" name="Contact_Number" id="contact_number" required value=<?php echo $phone?>><br>
                    <label>Message</label>
                    <textarea rows="4" cols="50" name="Conatact_message" id="contact_message"><?php echo $message?></textarea><br><br>
                    <label>Asnwer</label>
                    <textarea rows="4" cols="50" name="answer" id="contact_message"><?php echo $answer?></textarea><br><br>
                    <input type="submit" id="submitbtn" value="Update" name="update">     <input type="reset" id="resetbtn" value="Reset">
                </form>
            </fieldset>
            
        </div>

  </body>
</html