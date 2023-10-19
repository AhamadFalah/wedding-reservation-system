<?php
$id=$_GET["updateID"];
include_once 'config.php';
$sql="SELECT * FROM wedding_venue where venue_ID=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row["v_name"];
$type=$row["v_type"];
$v_capacity=$row["v_capacity"];
$price=$row["price_per_event"];
if(isset($_POST["update"])){
    $name=$_POST["Venue_name"];
    $type=$_POST["V_type"];
    $capacity=$_POST["V_capacity"];
    $price=$_POST["price_per_event"];
    //$id=$_GET["updateID"];
    include_once 'fucntions.php';
    $venue=update_venue($conn,$id,$name,$type,$capacity,$price);
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
      .Admin_v {
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
    
            .Admin_v fieldset {
                border: none;
                padding: 0;
                margin-bottom: 20px;
                flex: 1;
            }
    
            .Admin_v legend {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }
    
            .Admin_v label {
                display: block;
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 8px;
                text-align: left;
            }
    
            .Admin_v input[type="text"],
            .Admin_v input[type="email"],
            .Admin_v input[type="number"],
            .Admin_v select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                margin-bottom: 20px;
            }
    
            .Admin_v input[type="submit"],
            .Admin_v input[type="reset"] {
                background-color: green;
                color: #fff;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border-radius: 4px;
                margin-left: 5px;
            }
    
            .Admin_v[type="submit"]:hover,
            .Admin_v[type="reset"]:hover {
                background-color: lightgreen;
            }
    </style>
  </head>
  <body>
  <div class="Admin_v">
            <fieldset>
                <legend>Wedding venues</legend>
                <form method="post" action="">
                    <label>Enter venue name: </label>
                    <input type="text" name="Venue_name" id="venue_name" value=<?php echo $name?>><br>
                    <label>Enter venue type:</label>
                    <input type="text" name="V_type" id="V_type" value=<?php echo $type?>><br>
                    <label>Enter venue capacity: </label>
                    <input type="number" name="V_capacity" id="V_capacity" required value=<?php echo $v_capacity?>><br>
                    <label>Price per event: </label>
                    <input type="text" name="price_per_event" id="price" required value=<?php echo $price?>><br>
                    <input type="submit" id="submitbtn" value="Update venue" name="update"><input type="reset" id="resetbtn" value="Reset">
                </form>
            </fieldset>
            
        </div>

  </body>
</html