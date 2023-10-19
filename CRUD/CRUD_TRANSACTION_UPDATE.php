<?php
$id = $_GET["updateID"];
include_once 'config.php';
$sql = "SELECT * FROM payments WHERE Payment_ID = $id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
        $status  = $row["P_Status"];

if (isset($_POST["update"])) {
 $status  = $_POST["P_Status"];
    include_once 'CRUD_FUNCTIONS.php';
    $transaction = update_transaction($conn,$id,$status);
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
                <legend>Transaction #<?php echo $id?></legend>
                <form method="post" action="">
                    <label>Status: </label>
                    <select name="P_Status" id="P_Status" required value=<?php echo $status?>>
                        <option value="Approved">Approved</option>
                        <option value="Pending">Pending</option>
                    <input type="submit" id="submitbtn" value="Update-Reservation" name="update"><input type="reset" id="resetbtn" value="Reset">
                </form>
            </fieldset>
            
        </div>

  </body>
</html>