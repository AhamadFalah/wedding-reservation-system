<?php
include_once 'header.php';
?>
        <center><img src="Images/LOGO.png" width="500px" height="500px"></center>
        <center><h1>Welcome to the Grand Royale</h1>
        <h2><?php 
        if(isset($_SESSION["username"])){
                echo $_SESSION["username"];
        }
        else{
                echo"";
        }
        ?></h2><center>
                <head>
	
        <style>
                .gary {
          display: flex;
          padding: 2px;
          transition: 0.5s;
          
        }
        
        
        .gary__column {
          display: flex;
          flex-direction: column;
          width: 50%;
          margin: 15px;
        }
        
        .gary__image {
          display: block;
            width: 100%;
            margin :3px;
            height: auto;
        
        }
        
        a{
               text-decoration: none;
               color: black;
            }
        
        
        .gary__thumb{
                box-shadow: 4px 4px 20px  rgb(58, 58, 58);
                    border-radius: 5px;
                                border: 2px solid black;
                                width: 100%;
                                padding-right:7px;
                    background-color: #766a5c;
                                                
        }
        .gary__thumb:hover{
                transform: scale(1.1);
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
        
        </style>
        <br>
        </head>
          
        <body>
                
                <div class="gary" >
                
                        <div class="gary__column" >
                                        <figure class="gary__thumb" style="margin-bottom:30px;">
                                        <a href="venue_type01.php">
                                                <video width= 101.5% height=auto controls loop><source src="video/beachfront.mp4" class="gary__image" >
                                                </video>
                                                <div class="intro"> <p>Beach Front House</p></a></div>
                                        </figure>
                                        
                                        <figure class="gary__thumb">
                                        <a href="venue_type02.php">
                                                <video width= 101.5% height=auto controls loop><source src="video/grandlawn.mp4" class="gary__image" >
                                                </video>
                                                <div class="intro"> <p>Grand Lawn</p></a></div>
                                                </figure>	
                        </div>
                        <div class="gary__column">
                                
                                        <figure class="gary__thumb" style="margin-bottom:30px;">
                                        <a href="venue_type03.php">
                                                <video width= 101.5% height=auto controls loop><source src="video/grandballroom.mp4" class="gary__image" >
                                                </video>
                                                <div class="intro">  <p>Grand Ballroom</p></a></div>
                                        </figure>
                                
                                        <figure class="gary__thumb">
                                        <a href="venue_type04.php">
                                                <video width= 101.5% height=auto controls loop><source src="video/banquethall.mp4" class="gary__image" >
                                                </video>
                                                <div class="intro"> <p>Banquet Hall</p></a></div>
                                        </figure>		
                                
                        
                        </div> </div>
                        
                        <br><br>
                
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
                </body>
<?php
include_once 'footer.php';
?>