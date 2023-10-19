<?php
function create_reservation($conn,$id,$date,$email,$phoneNo,$guest,$amount,$status,$packageId,$venueId,$customerId){

    $query = "SELECT MAX(RID) AS max_rid FROM Reservation";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $nextRid = $row['max_rid'];
    $id = $nextRid + 1;

    $sql="INSERT INTO reservation (RID,R_Date,R_Email,R_PhoneNo,No_Guest,R_Amount,R_Status,PID,VID,CID) values ('$id','$date','$email','$phoneNo','$guest','$amount','$status','$packageId','$venueId','$customerId')";
    $result=mysqli_query($conn,$sql);
    
    if($result){
        echo"Data inserted successfully";
        header("location:MANAGE_RESERVATION.php?error=no");
    }
    else{
        die(mysqli_error($conn));
    }
}
function update_reservation($conn,$id,$date,$email,$phoneNo,$guest,$amount,$status,$packageId,$venueId){
$sql="UPDATE reservation set RID=$id,R_Date='$date',R_Email='$email',R_PhoneNo='$phoneNo',No_Guest=$guest,R_Amount=$amount,R_Status='$status',PID=$packageId,VID=$venueId WHERE RID=$id;";
$result=mysqli_query($conn,$sql);
if($result){
    echo"okay";
    header("location:MANAGE_RESERVATION.php");
}
else{
    echo"no";
}
}

function create_transaction($conn,$id,$date,$pid,$rid,$method,$amount,$status){
    
    $query = "SELECT MAX(Payment_ID) AS max_payment_id FROM payments";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $next_payment_id = $row['max_payment_rid'];
    $id = $next_payment_id + 1;

    $sql="INSERT INTO payments (Payment_ID,P_Date,PaymnetA_ID,RID,P_Method,P_Amount,P_Status) values ('$id','$date','$pid','$rid','$method','$amount','$status')";
    $result=mysqli_query($conn,$sql);
    
    if($result){
        echo"Data inserted successfully";
        header("location:CRUD_TRANSACTION.php?error=no");
    }
    else{
        die(mysqli_error($conn));
    }
}

function update_transaction($conn,$id,$status){
    $sql="UPDATE payments set P_Status='$status' WHERE Payment_ID=$id;";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"okay";
        header("location:CRUD_TRANSACTION.php");
    }
    else{
        echo"no";
    }
    }

?>

