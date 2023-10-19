<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html>
    <head> 
        <title> venues</title>
<style>
    .body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }
    img{
        max-width: 330px;
        border-radius: 5px;
        border : 3px solid rgb(46, 46, 46);
        margin-right: 50px;
        margin-left: 40px;
        
    }
    .image:hover{
  transform: scale(1.3);
  transition: 0.4s;
  box-shadow: 10px 15px 20px  black;
  }
    .container{
        margin: 50px auto;   
        width: 85%;
    
    }
    button{
    margin-top: 10px;
    color:whitesmoke;
    background-color: black;
    border-radius: 3px;
    }
    a{
       text-decoration: none;
    }
    
  .Subutton{
  background-color: #4CAF50;
  color: white;
  padding: 8px 11px;
  margin: 8px 0; 
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right:15px;
}
.Subutton:hover{
	transform: scale(1.2);
	transition: 0.5s;
  box-shadow: 8px 8px 8px  black;
  }


</style>

<script>

</script>

    </head>
    <body>
        <CENTER>
        <h1 style="margin-bottom: 8px;"> VENUES </h1>
        <h3 style="margin: 0px;">Venues offered by the hotel</h3>
        <br/> <hr/><br/><br/> </CENTER>  


        <div class="container">
            <image src="images/beach.jpg" style=" float: left;  margin: 50px;" class="image"> </image>
            <div class="text">
              <center> <h2>Beach Front House</h2> <br></center> 
                <p>Welcome to Bach Font House, our exquisite beach wedding venue. With its stunning coastal setting, romantic ambiance, and luxurious amenities,
                     it's the perfect place to fulfill your dream of a beachfront wedding. 
                     Bach Font House is the perfect beach wedding venue, where natural beauty, exceptional service, and unforgettable memories come together to create a truly magical experience. </p>
            </div> <br>
            <center> <a href="venue_type01.php"> <button class="Subutton">  More Info </button> </a></center>
        </div> 
        <br><br><br>

        <div class="container">
            <image src="images/granlawn.jpg" style="  float: right; margin: 50px;" class="image"> </image>
            <div class="text">
              <center> <h2>Grand Lawn</h2> <br></center> 
                <p>A Welcome to Grand Lawn Venue, where grandeur meets elegance for an unforgettable wedding experience. Our meticulously manicured lawn sets the stage for a captivating celebration.
                     With spacious dressing suites, impeccable service, and an enchanting atmosphere, create lasting memories at Grand Lawn Venue. </p>
            </div>  <br>
            <center> <a href="venue_type02.php"> <button class="Subutton">  More Info </button> </a></center>
        </div> 
        <br><br><br>
       
        <div class="container">
            <image src="images/ballroom.jpg" style="  float: left; margin: 50px;" class="image"> </image>
            <div class="text">
              <center> <h2>Grand Ballroom</h2> <br></center> 
                <p>Welcome to the Grand Ballroom Venue, where elegance and luxury intertwine for your dream wedding. With opulent details and impeccable service, our team will bring your vision to life. 
                    Indulge in a delectable menu and dance the night away in our enchanting grand ballroom. where your expectations will be exceeded. </p>
            </div><br>
            <center> <a href="venue_type03.php"> <button class="Subutton">  More Info </button> </a></center>
        </div> 
        <br><br><br>

        <div class="container">
            <image src="images/banquethall.jpg" style="  float: right; margin: 50px;"class="image"> </image>
            <div class="text">
              <center> <h2>Banquet Hall</h2> <br></center> 
                <p>Welcome to our extraordinary banquet hall, the perfect setting for your unforgettable wedding. 
                    Our banquet hall combines exquisite details with impeccable service, ensuring every moment of your special day is nothing short of perfection.
                     Indulge in a delightful culinary experience and dance the night away in our enchanting space. </p>
            </div>  <br>
            <center> <a href="venue_type04.php"> <button class="Subutton">  More Info </button> </a></center>
        </div> 
        <br><br>

    </body>
</html>


<?php
include_once 'footer.php';
?>