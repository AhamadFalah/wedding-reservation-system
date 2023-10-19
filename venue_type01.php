<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
    <head> 
        <title> Beach Front House</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
        <style>
            
            body{
                margin: 0;
                padding: 0;             
                align-items: center;
            }
         

            button{
                margin-top: 10px;
             color:whitesmoke;
            background-color: black;
            border-radius: 3px;}
           
            
            img{
        border-radius: 5px;
        width:370px;
       }
       
       .container{
        
        
        }
        .card{
            width: 375px;
            margin: 65px;
            box-shadow: 4px 4px 20px  rgb(58, 58, 58);
            border-radius: 7px;
            border : 3px solid rgb(46, 46, 46);
        }
        .card:hover{
         transform: scale(1.2);
        transition: 0.4s;
        box-shadow: 10px 15px 20px  black;
        }

        .intro{
            text-align: center;
        }

.main{
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
width: 100%;
}
.full-box{
display: flex;
flex-wrap:wrap;
align-items: center;
justify-content: center;
width: 100%;
}
.comment-box{
    width:500px;
    background:white;
    padding: 20px;
    margin: 40px;
    border-radius:8px;
    cursor: pointer;
    box-shadow: 3px 3px 25px rgba(0,0,0,3); 
    height:240px;
}
.comment-box:hover{
  transform: scale(1.2);
     transition: 0.4s;
  box-shadow: 10px 15px 20px  black;
}


.profile{
    display: flex;
    align-items: center;
}
.box-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;

}
.profile-immage{
    width: 70px;
    height: 70px;
    box-shadow: 3px 3px 25px rgba(0,0,0,3);
    overflow: hidden;
    border-radius: 50%;
    margin-right: 10px;

}
.profile-immage img {
    width: 100%;
    height:100%;
    object-fit: cover;
    object-position: center;
}
.name{
 
    display: flex;
    flex-direction: column;
    margin-left: 10px;
}
.name strong{
    color: black;
    font-size: 18px;
}
.name span{
  
    color:gray;
    margin-top: 2px;
}

.comment{
    color: black;
}
.stars{
    font-size: 20px;
}
.checked  {
  color:gold;
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
    box-shadow: 10px 15px 20px  black;
  }
a{
       text-decoration: none;
    }
    .pic{
        border-radius: 4px;
        width:370px;
        width: 400px;
         box-shadow: 8px 8px 20px  black;
          margin: 40px;
          border : 3px solid rgb(46, 46, 46);
       }
    .pic:hover{
  transform: scale(1.3);
     transition: 0.4s;
  box-shadow: 10px 15px 20px  black;}
  td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

table:hover{
    transform: scale(1.3);
     transition: 0.4s;
  box-shadow: 10px 15px 20px  black;
}
        </style>
    </head>
    <body>
        <CENTER> <br><br>
            <h1 >Beach Front House</h1>
            <p style="margin-top:40px; margin-left: 80px; margin-right:80px;" >Welcome to Bach Font House, our exquisite beach wedding venue. 
                With its stunning coastal setting, romantic ambiance, and luxurious amenities, it's the perfect place to fulfill your dream of a beachfront wedding.
                At Bach Font House, you'll find yourself immersed in natural beauty, with the sandy shore and sparkling sea as your backdrop.
                 Exchange vows under a beautifully adorned canopy, surrounded by panoramic views of the ocean and endless blue skies.
                  Our dedicated team will work closely with you to create a personalized experience that reflects your unique style and preferences.
                Bach Font House is the perfect beach wedding venue, where natural beauty, exceptional service, and unforgettable memories come together to create a truly magical experience.

            </p> 
            <br/><br/><br/>
            <image src="images/venue01.1.jpg" class="pic" > </image>
            <image src="images/venue01.2.jpg" class="pic"  > </image>
            <image src="images/venue01.3.jpeg" class="pic" > </image>
            <br/><br/> <a href="Garyoutdoor.php"> <button class="Subutton" > See Gallery</button> </a>
             <br> <br><hr> <br> <br> <br>
            

            <h1>SEATING <br> ARRANGEMENTS</h1> <br/><br/>  
        </CENTER>  

        <center>
<div class="cont">
    <div class="card">
        <image src="images/seating1.jpg" ></image>
        <div class="intro"> <h3>Arrangement 1</h3> <p> Capacity 900</p></div>
</div>
<div class="card">
    <image src="images/seating2.png" ></image> 
    <div class="intro"> <h3>Arrangement 2</h3> <p> Capacity 750</p></div>
</div>
<div class="card">
    <image src="images/seating3.png"></image> 
    <div class="intro"> <h3>Arrangement 3</h3> <p> Capacity 600</p></div>
</div>
</div>
<BR></BR>

<?php
include_once 'includes/databasehandle.inc.php';

$sql = " SELECT * FROM wedding_venue WHERE 
        venue_id = 3 ";

$result = ($con->query($sql));
if($result-> num_rows > 0){

    while($row= $result -> fetch_assoc()){
        echo  "<table border=1px>
        <tr>
            <td>Venue id</td>
            <td>".$row['venue_id']."</td>
        </tr>
        <tr>
            <td> Venue name</td>
            <td>".$row['v_name']."</td>
        </tr>
        <tr>
        <td> Venue type</td>
        <td>".$row['v_type']."</td>
        </tr>
        <tr>
            <td> Maximum Capacity</td>
            <td>".$row['v_capacity']."</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>".$row['price_per_event']."</td>
        </tr>
    </table>";
        
    }

}
?>




<br><?php
if(isset($_SESSION["username"])){
    echo "<a href='Reservationform.php'><button class='Subutton'> Make Your Reservation</button></a>";
}else{
    echo "<a href='login.php'><button class='Subutton'> Make Your Reservation</button></a>";
}
?></center>
<br><br><br><br><br><br>
   
<section class="main">
    <div class="full-box">
        <div class="comment-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-immage">
                         <img src="images/pic1.jpg">
                    </div>
                    <div class="name">
                        <strong>@Issac_Edison </strong>
                        <span>
                            <div class="stars">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked "></i>
                                <i class="fa fa-star  "></i>
                           </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="comment">
                <p> Review: Beach Font House is a gem of a wedding venue! The beachfront view is stunning, 
                    and the staff goes above and beyond to ensure every detail is perfect. Highly recommended for a romantic and picturesque wedding.
                </p>
            </div>
        </div>

        <div class="comment-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-immage">
                         <img src="images/pic2.jpg">
                    </div>
                    <div class="name">
                        <strong>@Erza_Scarlet </strong>
                        <span>
                            <div class="stars">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked "></i>
                                <i class="fa fa-star "></i>
                           </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="comment">
                <p> Review: Our wedding at Beach Font House was a dream come true. The venue is stunning, the staff is attentive, 
                    and the catering is delicious. It's truly a magical place for a wedding. <br><br>
                </p>
            </div>
        </div>
        <div class="comment-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-immage">
                         <img src="images/pic3.jpg">
                    </div>
                    <div class="name">
                        <strong>@Jackie_DiCaprio</strong>
                        <span>
                             <div class="stars">
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked "></i>
                            <i class="fa fa-star  checked"></i>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="comment">
                <p>Review: Beach Font House exceeded our expectations. The staff was helpful, the beach was pristine,
                     and the beach house provided an elegant setting. Our guests were impressed, and it made our dream wedding a reality.  
                </p>
            </div>
        </div>
        <div class="comment-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-immage">
                         <img src="images/pic4.webp">
                    </div>
                    <div class="name">
                        <strong>@Marilyn_Gadot</strong>
                        <span>  
                            <div class="stars">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked "></i>
                                <i class="fa fa-star  checked"></i>
                                <i class="fa fa-star  checked"></i>
                           </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="comment">
                <p> Review: Beach Font House is a slice of paradise. The beachfront location, beautiful venue, 
                    and outstanding service made our wedding unforgettable. Highly recommended for a dreamy beach wedding. <br><br>
                </p>
            </div>
        </div>
    </div>
</section>
     
<br><br><br>

</body>
</html>



<?php
include_once 'footer.php';
?>