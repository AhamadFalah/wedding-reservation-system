<?php
function create_venue($conn,$name,$type,$capacity,$price){

    $sql="INSERT INTO wedding_venue (v_name,v_type,v_capacity,price_per_event) values ('$name','$type','$capacity','$price')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"Data inserted successfully";
        header("location:display.php?error=no");
    }
    else{
        die(mysqli_error($conn));
    }
}
function update_venue($conn,$id,$name,$type,$capacity,$price){
$sql="UPDATE wedding_venue set venue_id=$id,v_name='$name',v_type='$type',v_capacity='$capacity',price_per_event=$price WHERE venue_id=$id;";
$result=mysqli_query($conn,$sql);
if($result){
    echo"okay";
    header("location:display.php");
}
else{
    echo"no";
}
}

function createPackage($conn,$name,$price){
    $sql="INSERT INTO wedding_package (P_name,price) VALUES ('$name','$price')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"okay";
        header("location:DisplayPackage.php");
        exit();
    }
    else{
        echo"not okay";
    }
}

function update_package($conn,$id,$name,$price){
    $sql="UPDATE wedding_package SET package_ID=$id,P_name='$name',price=$price WHERE package_ID=$id;";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"Okay";
        header("location:DisplayPackage.php");
        exit();
    }
    else{
        echo"Not okay";
    }
}

function updateinquiry($conn,$id,$name,$phone,$message,$email,$userid,$Admin_answer){
$date=date("l jS \of F Y h:i:s A");
$sql="UPDATE contact_us SET contact_ID=$id,C_Name='$name',C_PhoneNo='$phone',C_Message='$message',Contact_date='$date',C_email='$email',userID=$userid,answer='$Admin_answer' where contact_ID=$id and userID=$userid";
$result=mysqli_query($conn,$sql);
if($result){
    echo"okay";
    header("location:displayinquiry.php");
}
}

function update_reservation($conn, $id,$userid,$venueid,$packageid,$status){
    $sql="UPDATE reservation_data set Reservation_ID=$id,userID=$userid,venue_id=$venueid,package_id=$packageid,status='$status'WHERE Reservation_ID=$id;";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"okay";
        header("location:CRUD_RESERVATION.php");
    }
    else{
        echo"no";
    }
    }
?>