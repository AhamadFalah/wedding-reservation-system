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
    </head>

    <body>
        <center>
          <h1 style="margin-bottom: 8px;"> PACKAGES </h1>
          <p>
            "Welcome to our world of elegant wedding packages, where dreams become cherished memories. 
            Explore our curated collection of sophisticated offerings, tailored to transform your special day into an unforgettable experience.
            Discover the perfect blend of luxury amenities, breathtaking venues, and personalized services.
            Let us embark on this enchanting journey together, crafting a celebration that reflects your unique love story.
            Start planning with us and let your dreams unfold in elegance."
          </p>
          <br/><hr/><br/><br/> 
        </center>  

          <div class="container">
            <image src="images/basicpackage.jpg" style=" float: left;  margin: 50px;" class="image"> </image>
              <div class="text">
                <center> <h2>BASIC PACKAGE</h2> <br></center> 
                  <p>Embrace classic elegance with a beautiful bridal bouquet, a tastefully adorned ceremony setup, 
                  a wedding cake for 50 guests, and a standard sound system for a charming and memorable wedding celebration.</p>  
              </div><br>
            <center> <a href="package_type1.php"> <button class="Subutton">  More Info </button> </a> </center>
          </div> 
          <br><br><br>

          <div class="container">
            <image src="images/silverpackage.jpg" style="  float: left; margin: 50px;" class="image"> </image>
              <div class="text">
                <center> <h2>SILVER PACKAGE</h2> <br></center> 
                  <p>Elevate your special day with upgraded floral arrangements, an enhanced ceremony setup featuring exquisite decorations, 
                  a custom wedding cake for 100 guests, and the enchanting ambiance of a professional DJ or live music performance. </p>
              </div>  <br>
            <center> <a href="package_type2.php"> <button class="Subutton">  More Info </button> </a> </center>
          </div> 
          <br><br><br>
       
          <div class="container">
            <image src="images/goldpackage.jpg" style="  float: left; margin: 50px;" class="image"> </image>
              <div class="text">
                <center> <h2>GOLD PACKAGE</h2> <br></center> 
                  <p>Indulge in opulence with luxurious floral designs, an elegant reception setup with specialty linens and chair covers, 
                  a gourmet menu selection that tantalizes the taste buds, and a celebratory champagne toast for all guests, 
                  creating an unforgettable experience of refined luxury. </p>
              </div><br>
            <center> <a href="package_type3.php"> <button class="Subutton">  More Info </button> </a> </center>
          </div> 
          <br><br><br>

          <div class="container">
            <image src="images/platinumpackage.jpg" style="  float: left; margin: 50px;"class="image"> </image>
              <div class="text">
                <center> <h2>PLATINUM PACKAGE</h2> <br></center> 
                  <p>Welcome to our extraordinary banquet hall, the perfect setting for your unforgettable wedding. 
                  Immerse yourself in unparalleled luxury with stunning floral arrangements, an elaborate ceremony setup that captivates with grandeur,
                  a personalized fine dining experience featuring gourmet delights, and the exclusive privilege of a complimentary 2-night stay for two
                  in a luxurious room or suite, ensuring a truly extravagant and memorable wedding celebration. </p>
              </div><br>
            <center> <a href="package_type4.php"> <button class="Subutton">  More Info </button> </a> </center>
          </div> 
        <br><br><br>

    </body>
</html>

<?php
include_once 'footer.php';
?>
 