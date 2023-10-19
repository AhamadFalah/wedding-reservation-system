
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
                <legend>New Reservation</legend>
                <form method="post" action="CRUD_RESERVATION_INSERT.php">
                    <label>Enter Customer ID: </label>
                    <input type="number" name="CID" id="CID" ><br>
                    <label>Enter Reservation Date: </label>
                    <input type="date" name="R_Date" id="R_Date" ><br>
                    <label>Enter Reservation Email:</label>
                    <input type="text" name="R_Email" id="R_Email"><br>
                    <label>Enter Reservation PhoneNo: </label>
                    <input type="text" name="R_PhoneNo" id="R_PhoneNo" required ><br>
                    <label>Enter Reservation Guest: </label>
                    <input type="number" name="No_Guest" id="No_Guest" required ><br>
                    <label>Status: </label>
                    <input type="text" name="R_Status" id="R_Status" required><br>
                    <label>Enter Reservation Amount: </label>
                    <input type="number" name="R_Amount" id="R_Amount" required ><br>
                    <label>Enter Package ID: </label>
                    <input type="number" name="PID" id="PID" required ><br>
                    <label>Enter the Venue ID: </label>
                    <input type="number" name="VID" id="VID" required ><br>
                    <input type="submit" id="submitbtn" value="Create-Reservation" name="update"><input type="reset" id="resetbtn" value="Reset">
                </form>
            </fieldset>
            
        </div>

  </body>
</html