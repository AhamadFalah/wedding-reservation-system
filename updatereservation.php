<?php
include_once 'header.php';
include_once 'includes/databasehandle.inc.php';
$id=$_GET["updateID"];
$sql="SELECT * FROM reservation_data WHERE Reservation_ID=$id;";
$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $id=$row["Reservation_ID"];
    $date=$row["R_date"];
    $time=$row["R_time"];
    $guest=$row["No_Of_Guests"];
    $venue=$row["R_venue"];
    $package=$row["R_package"];
    $phoneno=$row["Contact_Number"];
    $Name=$row["R_FullName"];
    $Email=$row["R_Email"];
    $address=$row["R_address"];
    $total=$row["total"];
    $UserID=$row["userID"];
    $VenueID=$row["venue_id"];
    $PackageID=$row["package_id"];
    $status=$row["status"];
}
if(isset($_POST["update"])){
    $r_date=$_POST["R_date"];
    $r_time=$_POST["R_time"];
    $r_number=$_POST["R_number"];
    $r_venue=$_POST["R_venue"];
    $r_package=$_POST["R_package"];
    $r_phonenumber=$_POST["R_phonenumber"];
    $r_name=$_POST["R_name"];
    $r_email=$_POST["R_email"];
    $r_address=$_POST["R_Customer_Address"];
    $venue_id;

$venue_price;
$package_price;
$package_id;


if($r_venue=="Grand_Ballroom"){
$venue_id=5;
}
else if($r_venue=="GrandLawn"){
$venue_id=4;
}
else if($r_venue=="BeachFront"){
$venue_id=3;
}
else if($r_venue=="BanquetHall"){
$venue_id=6;
}

//echo $r_venue;
//echo $venue_id;
$sql="SELECT * FROM wedding_venue WHERE venue_id=$venue_id;";
$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $venue_price=$row["price_per_event"];
}else{
    echo 'Not successful';
}

if($r_package=='Basic_Package'){
$package_id=5;
}
else if($r_package=='SilverPackage'){
$package_id=7;
}
else if($r_package=='GoldPackage'){
$package_id=8;
}
else if($r_package=='PlatinumPackage'){
$package_id=9;
}

$sql="SELECT * FROM wedding_package WHERE package_ID=$package_id;";
$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $package_price=$row["price"];
}else{
    echo 'Not successful';
}

$total=($r_number*$package_price)+$venue_price;
    $date=checkR_valid($con,$r_date,$r_venue);
    if($date !== false){
        echo"<script>alert('Venue is already reserved')</script>";
    //header("location:updatereservation.php?error=Venue_Reserved");
    exit();
    }
    $update=update_reservation($con,$id,$r_date,$r_time,$r_number,$r_venue,$r_package,$r_phonenumber,$r_name,$r_email,$r_address,$total,$venue_id,$package_id);
}
?>
<h1>Update Reservation</h1>
<div class="reservation">
<script src="Javascript/NewReservationFormvalidation.js"></script>
                <form method="post" action="" onsubmit="return validatevenuecapacity()">
                <h1>Make reservation</h1>
                    <label>Enter date: </label>
                    <input type="date" name="R_date" id="R_date" required value=<?php echo $date?>><br><br>
                    <label>Enter time: </label>
                    <input type="time" name="R_time" id="R_time" required value=<?php echo $time?>><br><br>
                    <label>Enter number of guests: </label>
                    <input type="number" name="R_number" id="R_number" required value=<?php echo $guest?>><br><br>
                    <label>Select venue: </label>
                    <select name="R_venue" id="R_venue" required value=<?php echo $venue?>>
                        <option value="Grand_Ballroom">Grand Ballroom</option>
                        <option value="GrandLawn">Grand Lawn</option>
                        <option value="BeachFront">Beach Front</option>
                        <option value="BanquetHall">Banquet Hall</option>
                    </select><br><br>
                    <label>Select package: </label>
                    <select name="R_package" id="R_package" required value=<?php echo $package?>>
                        <option value="Basic_Package">Basic Package</option>
                        <option value="SilverPackage">Silver Package</option>
                        <option value="GoldPackage">Gold Package</option>
                        <option value="PlatinumPackage">Platinum Package</option>
                    </select><br><br>
                    <button name="total" id="totalbutton" type="button" onclick="calculateTotalPrice()">Calculate total price</button><br><br> <p id="displaytotal"></p>
                    <h1>Personal information</h1>
                    <label>Contact number: </label>
                    <input type="number" name="R_phonenumber" id="R_phonenumber" required value=<?php echo $phoneno?>><br><br>
                    <label>Name: </label>
                    <input type="text" name="R_name" id="R_name" value=<?php echo $Name?>><br><br>
                    <label>Email: </label>
                    <input type="email" name="R_email" id="R_email" required value=<?php echo $Email?>><br><br>
                    <label>Enter address:</label><br>
                    <textarea  rows="4" cols="50" name="R_Customer_Address"><?php echo $address?></textarea><br><br>
                    <label><a href="#">Do you aree to the terms and conditions</a></label>
                    <input type="checkbox" id="checkbox1" onclick="completeregistration()"><br><br>
                    <button type="submit" id="submitbtn" name="update">Update Reservation</button> <input type="Reset" value="Reset set your details"><br><br>
                    <script>
                        let btn=document.getElementById("submitbtn").disabled=true;
    
                    </script>
                </form>
        </div>

<?php
include_once 'footer.php';
?>