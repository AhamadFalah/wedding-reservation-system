<?php
include_once 'header.php';
include_once 'includes/databasehandle.inc.php';
$id=5;
$sql='SELECT * FROM wedding_package WHERE package_ID=7;';
$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $p_id=$row["package_ID"];
    $name=$row["P_name"];
    $price=$row["price"];
}
else{
    echo"Not okay";
}
?>
<!DOCTYPE html>
<html>
    <head> 
        <title> Silver Package </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
        <style>
            
            body{
                margin: 0;
                padding: 0;             
                align-items: center;
            }
            
            img{
                border-radius: 5px;
                width:500px;
            }
       
            .card{
                align-items: center;
                background-color: rgb(173, 170, 170);
                width:150px;
                height: 65px;
                border-radius: 5px;    
            }

            a{
                text-decoration: none;
            }

            ul{
                background-color: #333;
            }

            .cont{
                width: 500px;
                float: right;
            }
            .pic{
                border-radius: 4px;
                width:370px;
                width: 400px;
                box-shadow: 8px 8px 20px  black;
                margin: 40px;
                border : 3px;
            }
            .cont:hover{
                transform: scale(1.3);
                transition: 0.4s;
                box-shadow: 10px 15px 20px  black;
            }

            .text{
                text-align: left;
                margin-left: 50px;
            }
            ul.text{
                background-color:white;
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
                align:left;
            }

            .Subutton:hover{
	            transform: scale(1.2);
	            transition: 0.5s;
                box-shadow: 8px 8px 8px  black;
            }

        </style>
        </head>

        <body>
            <center><br/>

            <h1> <?php echo $name; ?> PACKAGE</h1>
            <br/><br/> 

					<p>The Silver Package epitomizes refined sophistication, 
					adding a graceful touch to your wedding and offering an elevated experience that will leave a lasting impression. 
					Immerse yourself in an ambiance of timeless elegance as we curate every detail to perfection. 
					With thoughtfully crafted enhancements, this package transcends expectations,
					ensuring an unforgettable celebration that captures the essence of your love story.
					Let us guide you on a journey of elevated elegance, where every moment becomes a treasured memory.</p>
            <br/><hr><br/><br/>
 
            <div class="card">
                <p style="margin-bottom:0;">Price Per Person </p>
                <h3 style=" margin: 7px;"> RS.<?php echo $price?></h3>
            </div>
            <br/><br/><br/>

            <div class="cont">
                <img src="images/package2.jpg" style="float: right;">
            </div>

            <div class="text">
                <h3>WHAT'S INCLUDED</h3><br>
                <ul class="text">
				<li>Upgraded floral arrangements and centerpieces</li><br>
				<li>Enhanced ceremony setup with aisle decorations</li><br>
				<li>Customized wedding cake for up to 100 guests</li><br>
				<li>Professional DJ or live music performance</li><br>
				<li>Sparkling toast</li>
                </ul><br>
                <?php
                    if(isset($_SESSION["username"])){
                    echo "<a href='Reservationform.php'><button class='Subutton'> Make Your Reservation</button></a>";
                    }else{
                    echo "<a href='login.php'><button class='Subutton'> Make Your Reservation</button></a>";
                    }
                ?>
            </div>
            
            </center>
            <br><br><br><br><br><br>
    
    </body>
</html>

<?php
include_once 'footer.php';
?>