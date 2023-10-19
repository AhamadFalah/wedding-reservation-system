<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction Update</title>
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
                <legend>New Transaction</legend>
                <form method="post" action="CRUD_TRANSACTION_INSERT.php">
                    <label>Enter Payment ID: </label>
                    <input type="number" name="Payment_ID" id="Payment_ID" ><br>
                    <label>Enter Reservation ID: </label>
                    <input type="number" name="RID" id="RID" required ><br>
                    <label>Enter Payment Admin ID: </label>
                    <input type="number" name="PaymentA_ID" id="PaymentA_ID" required ><br>
                    <label>Enter Payment Method: </label>
                    <input type="number" name="P_Method" id="P_Method" required ><br>
                    <label>Enter Payment Date: </label>
                    <input type="date" name="P_Date" id="P_Date" ><br>
                    <label>Status: </label>
                    <input type="text" name="P_Status" id="P_Status" required><br>
                    <label>Enter Payment Amount: </label>
                    <input type="number" name="P_Amount" id="P_Amount" required ><br>
                    
                    <input type="submit" id="submitbtn" value="Create-Reservation" name="update"><input type="reset" id="resetbtn" value="Reset">
                </form>
            </fieldset>
            
        </div>

  </body>
</html>
<?php
include_once 'footer.php';
?>