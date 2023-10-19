<?php
include 'databasehandle.inc.php';
include 'function.inc.php';
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

echo $r_venue;
echo $venue_id;
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
    header("location:../Reservationform.php?error=VenueisReserved");
    exit();
}
createReservation($con,$r_date,$r_time,$r_number,$r_venue,$r_package,$r_phonenumber,$r_name,$r_email,$r_address,$total,$venue_id,$package_id);
/*$sql = "INSERT INTO reservation_data (R_date,R_time,No_Of_Guests,R_venue,R_package,Contact_Number,R_FullName,R_Email,R_address)
VALUES ($r_date,$r_time,$r_number,$r_venue,$r_package,$r_phonenumber,$r_name,$r_email,$r_address)";*/
?>