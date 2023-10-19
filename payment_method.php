
<html>
<head>
    <style>
        .p1{
            text-align: center;
            background-color: lightgrey;
            width: 500px;
            border: 4px solid;
            border-radius:15px;
            padding: 20px;
            margin: 10px;
        }
        .under{
            text-decoration: underline;
        }
        .bx1{
            text-align: center;
            background-color: none; 
            border: 4px solid;
            padding: 50px;
            margin: 10px;
            width: 40%;
            float:right;
            Margin: 50px;

        }
        .bx2{
            text-align: center;
            background-color: none; 
            border: 4px solid;
            height: 500px;
            padding: 50px;
            margin: 10px;
            width: 40%;
            float:left;
            Margin: 50px;
            
        }

        .blue{
            padding: 50px;
            width: 100%;
            height: 300px; 
            border: 2px solid;
            text-align: center;    
        }
        .bb{
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .usbutton {
            background-color: #4CAF50;
            color: white;
            padding: 6px 15px;
            margin: 8px 0; 
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .usbutton:hover{
	       transform: scale(1.2);
	       transition: 0.4s;
           box-shadow: 8px 8px 8px  black;
  }
        


    </style>
</head>

<body>
    <center>
    <h1>SELECT PAYMENT METHOD</h1> <br><br>

    <div class="p1"><?php echo $total?><Rs. #####> for Reservation <ID> </div>

    </center>
    <br><br>

<div class="bb">
    <div class ="bx1">
        <h3>OFFLINE</h3><br><br>
        <p class="under">Bank transfer</p><br><br>
        <p>Upload bank slip</p>
        <div class="blue" placeholder="Upload bank slip"> </div>
        <a href="#"><button  class= "usbutton" style="margin-center: 300px;"> upload Slip</button></a>
    </div>

    <div class ="bx2">
        <h3>ONLINE</h3><br><br>
        <p class="under">Card payment</p><br><br>
        <p style=>Credit or Debit card</p><br><br><br><br><br><br>

        <a href="online_payment.php"><button   class= "usbutton" style="margin-center: 300px; ">Pay Now</button></a>

    </div>
    </div>

</body>

</html>

<?php
include 'footer.php';
?>