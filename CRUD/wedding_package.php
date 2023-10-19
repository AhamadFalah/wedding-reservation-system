<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding_venuesEditForm</title>
    <style>
      .Admin_p {
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
    
            .Admin_p fieldset {
                border: none;
                padding: 0;
                margin-bottom: 20px;
                flex: 1;
            }
    
            .Admin_p legend {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }
    
            .Admin_p label {
                display: block;
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 8px;
                text-align: left;
            }
    
            .Admin_p input[type="text"],
            .Admin_p input[type="email"],
            .Admin_p input[type="number"],
            .Admin_p select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                margin-bottom: 20px;
            }
    
            .Admin_p input[type="submit"],
            .Admin_p input[type="reset"] {
                background-color: green;
                color: #fff;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border-radius: 4px;
                margin-left: 5px;
            }
    
            .Admin_p[type="submit"]:hover,
            .Admin_p[type="reset"]:hover {
                background-color: lightgreen;
            }
    </style>
  </head>
  <body>
  <div class="Admin_p">
            <fieldset>
                <legend>Wedding package</legend>
                <form method="post" action="wedding_package_insert.php">
                    <label>Enter Package name: </label>
                    <input type="text" name="p_name" id="venue_name"><br>
                    <label>Enter pacakge price:</label>
                    <input type="text" name="p_price" id="V_type"><br>
                    <input type="submit" id="submitbtn" value="Submit package details"><input type="reset" id="resetbtn" value="Reset">
                </form>
            </fieldset>
            
        </div>

  </body>
</html