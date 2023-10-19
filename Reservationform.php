<?php
include_once 'header.php';
?>
<div class="reservation">
<script src="Javascript/NewReservationFormvalidation.js"></script>
                <form method="post" action="includes/Reservation_form.php" onsubmit="return validatevenuecapacity()">
                <h1>Make reservation</h1>
                    <label>Enter date: </label>
                    <input type="date" name="R_date" id="R_date" required><br><br>
                    <label>Enter time: </label>
                    <input type="time" name="R_time" id="R_time" required><br><br>
                    <label>Enter number of guests: </label>
                    <input type="number" name="R_number" id="R_number" required><br><br>
                    <label>Select venue: </label>
                    <select name="R_venue" id="R_venue" required>
                        <option value="Grand_Ballroom">Grand Ballroom</option>
                        <option value="GrandLawn">Grand Lawn</option>
                        <option value="BeachFront">Beach Front</option>
                        <option value="BanquetHall">Banquet Hall</option>
                    </select><br><br>
                    <label>Select package: </label>
                    <select name="R_package" id="R_package" required>
                        <option value="Basic_Package">Basic Package</option>
                        <option value="SilverPackage">Silver Package</option>
                        <option value="GoldPackage">Gold Package</option>
                        <option value="PlatinumPackage">Platinum Package</option>
                    </select><br><br>
                    <button name="total" id="totalbutton" type="button" onclick="calculateTotalPrice()">Calculate total price</button><br><br> <p id="displaytotal"></p>
                    <h1>Personal information</h1>
                    <label>Contact number: </label>
                    <input type="number" name="R_phonenumber" id="R_phonenumber" required><br><br>
                    <label>Name: </label>
                    <input type="text" name="R_name" id="R_name"><br><br>
                    <label>Email: </label>
                    <input type="email" name="R_email" id="R_email" required><br><br>
                    <label>Enter address:</label><br>
                    <textarea  rows="4" cols="50" name="R_Customer_Address"></textarea><br><br>
                    <label><a href="#">Do you aree to the terms and conditions</a></label>
                    <input type="checkbox" id="checkbox1" onclick="completeregistration()"><br><br>
                    <button type="submit" id="submitbtn" name="submit">Make your reservation now</button> <input type="Reset" value="Reset set your details"><br><br>
                    <script>
                        let btn=document.getElementById("submitbtn").disabled=true;
    
                    </script>
                </form>
        </div>
<?php
if(isset($_GET["error"])){
    if($_GET["error"]=="VenueisReserved"){
        echo"<p style='color:red;'>Venue is already reserved<p>";
    }
}
?>
<?php
include_once 'footer.php';
?>