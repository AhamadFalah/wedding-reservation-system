<?php
include_once 'header.php';
?>

<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
<head>
	<title>Venue Gallery</title>
<style>
	.gary {
  display: flex;
  padding: 2px;
  transition: 0.5s;
}


.gary__column {
  display: flex;
  flex-direction: column;
  width: 33%;
  margin: 3px;
}

.gary__image {
  display: block;
  width: 100%;
  transition: 0.5s;
border: 5px solid black;
margin :3px;
}
.gary__image:hover {
  transform: scale(1.2);
  box-shadow: 12px 15px 20px  black;
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
	transition: 0.4s;
	box-shadow: 8px 8px 8px  black;
  }
a{
       text-decoration: none;
    }

</style>
<br>
</head>
<CENTER>
        <h1 > Beach Front House Gallery</h1>        
        <br/> <hr/><br/> </CENTER>  
<div class="gary" >

	<div class="gary__column" >
			<figure class="gary__thumb">
				<img src="Images/venue01.4.jpg"  class="gary__image">
			
			</figure>
		
			<figure class="gary__thumb">
				<img src="Images/venue01.5.jpg"  class="gary__image">
				
		
			<figure class="gary__thumb">
				<img src="Images/venue01.6.jpg"  class="gary__image">
			
			</figure>
	
	</div>
	
	<div class="gary__column">
		
			<figure class="gary__thumb">
				<img src="Images/venue01.1.jpg"  class="gary__image">
				
			</figure>
		
			<figure class="gary__thumb">
				<img src="Images/venue01.9.jpg"  class="gary__image">
			
			</figure>		
		
			<figure class="gary__thumb">
				<img src="Images/venue01.7.jpg"  class="gary__image">
				
			</figure>
			
			<figure class="gary__thumb">
				<img src="Images/venue01.11.jpg"  class="gary__image">
				
			</figure>
	
	</div>
	
	<div class="gary__column">
	
			<figure class="gary__thumb">
				<img src="Images/venue01.8.jpg"  class="gary__image">				
			</figure>
		
			<figure class="gary__thumb">
				<img src="Images/venue01.10.jpg" class="gary__image">
			
			</figure>
	
			<figure class="gary__thumb">
				<img src="Images/venue01.3.jpeg"  class="gary__image">
				
			</figure>

			<figure class="gary__thumb">
				<img src="Images/venue01.2.jpg"  class="gary__image">
				
			</figure>
			
			<figure class="gary__thumb">
				<img src="Images/venue01.12.jpg"  class="gary__image">
				
			</figure>
		</div>
			
			
</div><br><br>
<CENter>	<?php
            if(isset($_SESSION["username"])){
              echo'<a href="Reservationform.php"><button class="Subutton" >Make Your Reservation</button></a>';
            }
            else{
              echo'<a href="login.php"><button class="Subutton" >Make Your Reservation</button></a>';
            }
            ?>
			<a href="venue_type01.php">  <button class="Subutton" >Back</button> </a> 
</center>
<br><br>
<?php
include_once 'footer.php';
?>