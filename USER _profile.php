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
        transition: 0.4s;
        }   


    .gary__column {
            display: flex;
            flex-direction: column;
            margin: 3px;
            background-color:#edece8;
            border-radius: 5px;
            padding-top : 85px;

    }
    a{
       text-decoration: none;
    }



    
    
    .container-option {
                display: flex;
                flex-direction: column;
                text-align: center;
                justify-content: center;
                width: 400px;
                height: 422px;
                margin-top: 28px;                
            }





            #center {
                margin-top: 70px;
                margin-bottom: 30px;
                text-align: center;
            }
            hr {
                border-color: black;
                color: black;
                margin-top: 5px;
                margin-bottom: 5px;
                width: 100%;
            }

            .profile-pic {
               
                width: 330px;
                height: 330px;
                border: 5px solid black;
                
            }
            .profile-pic:hover {
                transform: scale(1.1);
                box-shadow: 12px 15px 20px  black;
                transition: 0.4s;
                 }

            .userN {
                background-color: #b1b1b1;
                display: inline-block;
                border-radius: 5px;
                text-align: center;
                margin-bottom: 20px;
                padding-left: 2px;
                padding-right: 2px;
            }

            .name {
                background-color: #b1b1b1;
                display: inline-block;
                border-radius: 5px;
                text-align: center;
                padding-left: 2px;
                padding-right: 2px;
            }

            .container-profile-pic {
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding-bottom: 20px;
            }

            .container-profile-name {
                margin-top: 5px;
                margin-bottom: 10px;
                height: 90px;
            }

            .container-profile {
                display: flex;
                margin-bottom: 10px;
            }
            .option {
                padding: 5px;
                border-radius: 5px;
                width: 400px;
                height: 64px; 
                margin: 0px 0px 28px 0px;
                display: inline-block;
                background-color: #b1b1b1;
                border-width: 0px;
                cursor: pointer;
                transition: 0.5s;
            }

            .option:hover {
                background-color: #a1a1a1;
                transform: scale(1.2);
                box-shadow: 12px 15px 20px  black;
            }

            .option:active {
                background-color: #888888;
            }


            .edit-button {
                justify-content: center;
                margin-right: 20px;
                margin-top: 20px;
                border-width: 0px;
                border-radius: 5px;
                display: inline-block;
                background-color: #b1b1b1;
                padding: 2px 3px 2px 3px;
                width: 40px;
                height: 23px;
            }
            .edit-button:hover{
                transform: scale(1.1);
                box-shadow: 12px 15px 20px  black;
                transition: 0.4s;
            } 
            

            .container-profile-pic button:hover {
                background-color: #a1a1a1;
            }
            
            .container-profile-pic button:active {
                background-color: #888888;
            }

</style>


</head><body>
<div>
    <h1 id="center"><b>USER PROFILE<b></h1>
    <hr>
</div>

<br><br><br>

<div class="gary" >

	<div class="gary__column" style="width: 40%;" >
    <div class="container-profile-pic">
        <center>
        <?php
                include_once 'includes/databasehandle.inc.php';
                 //$image=$_SESSION["image"];
                 $id=$_SESSION["UID"];
                 $sql="SELECT * from signupdata WHERE UserID=$id";
                 $result=mysqli_query($con,$sql);
                 $row=mysqli_fetch_assoc($result);
                 $image=$row["profileimage"];
                echo "<img class='profile-pic' id='profile-pic' src=' ".$image."'alt='profile-Picture'>";
                //echo "<a href='MANAGE_RESERVATION.php'><button class='option'>Reservations</button></a>";
                ?>
            </div> <br>
            <div class="container-profile-name">
                <center>
                <?php
                $username=$_SESSION["username"];
                $email=$_SESSION["email"];
                echo "<h2 class='userN'><b>Hello There </b>" . $username . "</h2><br>";
                echo "<h4 class='name' >" . $email . "</h4>";
                ?>
                </center>
            </div>
            </center>
	</div>
	
	<div class="gary__column" style="width: 60%;"> <center>
    <a href="MANAGE_RESERVATION.php"><button class="option">Reservations</button></a>
    <a href="CRUD/MANAGE_TRANSACTION.php"><button class="option">Transaction History</button></a>
    <a href="userProfile_CRUD.php"><button class="option">Edit user profile</button></a>
    <a href="Contact_US_PHP.php"><button class="option" onclick="getPage('')">Help</button></a>
    <a href="userProfile_InuiryView.php"><button class="option">View inquires</button></a>
        </center>
			</figure>
	
	</div>
			
			
</div>
<br><br><br><br><br>
        </body>
<?php
include_once 'footer.php';
?>
