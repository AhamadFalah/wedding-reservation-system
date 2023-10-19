<?php
$id = $_GET["updateID"];
include_once 'config.php';

$sql = "SELECT * FROM reservation_data WHERE Reservation_ID = $id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id = $row["Reservation_ID"];
$userid=$row["userID"];
$venueid=$row["venue_id"];
$packageid=$row["package_id"];
$status=$row["status"];
if (isset($_POST["update"])) {
    $status = $_POST["R_Status"];
    include_once 'fucntions.php';
    $reservation = update_reservation($conn, $id,$userid,$venueid,$packageid,$status);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation Update</title>
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
                <legend>Reservation #<?php echo $id?></legend>
                <form method="post" action="">
                    <label>Enter Status: </label>
                    <select name="R_Status" value=<?php echo $status; ?>>
                        <option>Approve</option>
                        <option>Not Approved</option>
                        <option>Pending</option>
                    </select>
                    <input type="submit" id="submitbtn" value="Update-Reservation" name="update"><input type="reset" id="resetbtn" value="Reset">
                </form>
            </fieldset>
            
        </div>

  </body>
</html>