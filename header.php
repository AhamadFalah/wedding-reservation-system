<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Grand Royale</title>
        <link rel="icon" type="images" href="Images/headerlogo.png">
 <style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
line-height: 1.5;
font-family: 'Poppins', sans-serif;
}
*{
margin:0;
padding:0;
box-sizing: border-box;
}
.container{
max-width: 1170px;
margin:auto;
}
.row{
display: flex;
flex-wrap: wrap;
}
ul{
list-style: none;
}
/*CSS for the footer */
.footer{
background-color: #24262b;
padding: 70px 0;
}
.footer-col{
width: 25%;
padding: 0 15px;
}
.footer-col h4{
font-size: 18px;
color: #ffffff;
text-transform: capitalize;
margin-bottom: 35px;
font-weight: 500;
position: relative;
}
.footer-col h4::before{
content: '';
position: absolute;
left:0;
bottom: -10px;
background-color: #e91e63;
height: 2px;
box-sizing: border-box;
width: 50px;
}
.footer-col ul li:not(:last-child){
margin-bottom: 10px;
}
.footer-col ul li a{
font-size: 16px;
text-transform: capitalize;
color: #ffffff;
text-decoration: none;
font-weight: 300;
color: #bbbbbb;
display: block;
transition: all 0.3s ease;
}
.footer-col ul li a:hover{
color: #ffffff;
padding-left: 8px;
}
.footer-col .social-links a{
display: inline-block;
height: 40px;
width: 40px;
background-color: rgba(255,255,255,0.2);
margin:0 10px 10px 0;
text-align: center;
line-height: 40px;
border-radius: 50%;
color: #ffffff;
transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
color: #24262b;
background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
.footer-col{
width: 50%;
margin-bottom: 30px;
}
}
@media(max-width: 574px){
.footer-col{
width: 100%;
}
}
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;
}

li {
float: left;
}

li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

li a:hover:not(.active) {
background-color: #111;
}

.active {
background-color: #04AA6D;
}

/*Css form for the log in */
input[type=text],input[type=password],input[type=email],select {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

.Submitbutton{
width: 100%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}

.Submitbutton{
background-color: #45a049;
}

.loginform{
width: 70%;
margin-left: auto;
margin-right: auto;
}
/*Contat us form css*/
.container4 {
display: flexbox;
}

.form-container4 {
flex: 1;
}

.googlemap {
flex: 1;
margin-left: 20px;
margin: auto;
margin-top: 20px;
align-items: center; /* Adjust the margin as needed */
}

@media (max-width: 768px) {
.container4 {
flex-direction: column;
}
}
/*Contact us from css*/
.googlemap{
margin-bottom: 20px;
}
.contactusForum {
display: flex;
justify-content: space-between;
max-width: 800px;
margin: 0 auto;
margin-top: 20px;
padding: 40px;
background-color: #f2f2f2;
border: 1px solid #ccc;
border-radius: 5px;
margin-bottom: 50px;
}

.contactusForum fieldset {
border: none;
padding: 0;
margin-bottom: 20px;
flex: 1;
}

.contactusForum legend {
font-size: 24px;
font-weight: bold;
margin-bottom: 20px;
}

.contactusForum label {
display: block;
font-size: 16px;
font-weight: bold;
margin-bottom: 8px;
text-align: left;
}

.contactusForum input[type="text"],
.contactusForum input[type="email"],
.contactusForum input[type="number"],
.contactusForum select {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
font-size: 16px;
margin-bottom: 20px;
}

.contactusForum input[type="submit"],
.contactusForum input[type="reset"] {
background-color:green;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}

.contactusForum input[type="submit"]:hover,
.contactusForum input[type="reset"]:hover {
background-color: green;
}
/*Automated QnA css*/
.automatedQaA {
display: flex;
justify-content: space-between;
max-width: 800px;
margin: 20px auto;
padding: 40px;
background-color: #f2f2f2;
border: 1px solid #ccc;
border-radius: 5px;
}

.automatedQaA fieldset {
border: none;
padding: 0;
margin-bottom: 20px;
flex: 1;
}

.automatedQaA legend {
font-size: 24px;
font-weight: bold;
margin-bottom: 20px;
}

.automatedQaA label {
display: block;
font-size: 16px;
font-weight: bold;
margin-bottom: 8px;
text-align: left;
}

.automatedQaA select {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
font-size: 16px;
margin-bottom: 20px;
}

.automatedQaA input[type="submit"] {
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}
#Automatedbtn{
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}
#Automatedbtn:hover{
background-color: #0056b3;
}
.automatedQaA input[type="submit"]:hover {
background-color: #0056b3;
}
/* Gallery CSS*/
.gallery {
  display: flex;
  padding: 2px;
  transition: 0.3s;
}
.gallery:hover .gallery__image {
  filter: grayscale(1);
}
.gallery__column {
  display: flex;
  flex-direction: column;
  width: 25%;
}
.gallery__link {
  margin: 2px;
  overflow: hidden;
}
.gallery__link:hover .gallery__image {
  filter: grayscale(0);
}
.gallery__link:hover .gallery__caption {
  opacity: 1;
}
.gallery__thumb {
  position: relative;
}
.gallery__image {
  display: block;
  width: 100%;
  transition: 0.3s;
}
.gallery__image:hover {
  transform: scale(1.1);
}
.gallery__caption {
position: absolute;
bottom: 0;
left: 0;
padding: 25px 15px 15px;
width: 100%;
font-family: 'Raleway', sans-serif;
font-size: 16px;
color: white;
opacity: 0;
background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
transition: 0.3s;
}
/*Submit button in signup form*/
.signupform input[type="submit"],
.signupform  input[type="reset"] {
background-color: green;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}

.signupform  input[type="submit"]:hover,
.signupform  input[type="reset"]:hover {
background-color: #0056b3;
}

/*ContactUSConfirmation*/
#btn3{
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}
#btn4{
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}
#btn3:hover{
background-color: #0056b3;
}
#btn4:hover{
background-color: #0056b3;
}
/*Reservation form */
.reservation {
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

.reservation fieldset {
border: none;
padding: 0;
margin-bottom: 20px;
flex: 1;
}

.registraionformlegend {
font-size: 24px;
font-weight: bold;
margin-bottom: 20px;
}

.reservation label {
display: block;
font-size: 16px;
font-weight: bold;
margin-bottom: 8px;
text-align: left;
}

.reservation input[type="text"],
.reservation input[type="email"],
.reservation input[type="number"],
.reservation select {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
font-size: 16px;
margin-bottom: 20px;
}

.reservation input[type="submit"],
.reservation input[type="reset"] {
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}

.reservation[type="submit"]:hover,
.reservation[type="reset"]:hover {
background-color: #0056b3;
}
#totalbutton{
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}
#totalbutton:hover{
background-color: #0056b3;
}
/*Registration form*/
.registraionform {
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

.registraionform fieldset {
border: none;
padding: 0;
margin-bottom: 20px;
flex: 1;
}

.registraionformlegend {
font-size: 24px;
font-weight: bold;
margin-bottom: 20px;
}

.registraionform label {
display: block;
font-size: 16px;
font-weight: bold;
margin-bottom: 8px;
text-align: left;
}

.registraionform input[type="text"],
.registraionform input[type="email"],
.registraionform input[type="number"],
.registraionform select {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
font-size: 16px;
margin-bottom: 20px;
}

.registraionform input[type="submit"],
.registraionform input[type="reset"] {
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}

.registraionform[type="submit"]:hover,
.registraionform[type="reset"]:hover {
background-color: #0056b3;
}

.error {
border-color: red;
}
/* conforamtion reservation */
#confirmationbtn{
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}
#confirmationbtn:hover{
  background-color: #0056b3;
}
#confirmationbtn1{
background-color: #007bff;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
}
#confirmationbtn1:hover{
  background-color: #0056b3;
}
</style>
    </head>
    
    <body>
    <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="FAQ.php">FAQ</a></li>
  <li><a href="venues.php">Venues</a></li>
  <li><a href="packages.php">Packages</a></li>
  <li><a href="Gallery.php">Gallery</a></li>
  <li><a href="Contact_US_PHP.php">Contact</a></li>
  <?php 
  include_once 'includes/function.inc.php';
        if(isset($_SESSION["username"])){
            echo '<li style> <a href="Reservationform.php">Make your reservation</a></li>';
            echo '<li style="float:right"> <a href="includes/logout.inc.php">Log out</a></li>';
            echo '<li style="float:right"> <a href="USER _profile.php">'.$_SESSION["username"].'</a></li>';
        }
        else{
                //echo'<li style="float:left"> <a class="active" href="singup.php">Sign up</a> </li>';
                echo'<li style="float:right"> <a class="active" href="login.php">Login</a> </li>';
        }
  ?>
    </ul>
    <div class="container">