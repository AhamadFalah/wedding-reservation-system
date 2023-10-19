<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
#reservation {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#reservation td, #reservation th {
  border: 1px solid #ddd;
  padding: 8px;
}

#reservation tr:nth-child(even){background-color: #f2f2f2;}

#reservation tr:hover {background-color: #ddd;}

#reservation th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
#btn1{
background-color: green;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
margin-bottom: 10px;
}
#btn1:hover{
    background-color:lightgreen;
}
#btn2{
background-color: red;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 16px;
cursor: pointer;
border-radius: 4px;
margin-bottom: 10px;
}
#btn2:hover{
    background-color:lightcoral;
}
</style>
</head>
<body>
<h1>Reservation</h1>
<a href="GENERATE_RESERVATION_REPORT.php"><button id="btn1">Generate Report</button></a>
<a href="../systemDash.php"><button id="btn1">Back</button></a>
<table id="reservation">
  <tr>
    <th>Reservation_ID</th>
    <th>Date</th>
    <th>Time</th>
    <th>NoOfGuests</th>
    <th>Venue</th>
    <th>Package</th>
    <th>Contact_Number</th>
    <th>FullName</th>
    <th>Email</th>
    <th>Address</th>
    <th>Total</th>
    <th>UserID</th>
    <th>VenueID</th>
    <th>PackageID</th>
    <th>Status</th>
    <th>Operations</th>
  </tr>
  <tr>
    <?php
    $sql="SELECT * FROM reservation_data;";
    $result=mysqli_query($conn,$sql);
    if($result){
        //$row=mysqli_fetch_assoc($result);
        while($row=mysqli_fetch_assoc($result)){
          $id=$row["Reservation_ID"];
          $date=$row["R_date"];
          $time=$row["R_time"];
          $guest=$row["No_Of_Guests"];
          $venue=$row["R_venue"];
          $package=$row["R_package"];
          $phoneNo=$row["Contact_Number"];
          $name=$row["R_FullName"];
          $email=$row["R_Email"];
          $address=$row["R_address"];
          $amount=$row["total"];
          $userid=$row["userID"];
          $venueId=$row["venue_id"];
          $packageId=$row["package_id"];
          //$customerId=$row["userID"];
          $status=$row["status"];

            echo'<tr><td>'.$id.'</td>',
            '<td>'.$date.'</td>',
            '<td>'.$time.'</td>',
            '<td>'.$guest.'</td>',
            '<td>'.$venue.'</td>',
            '<td>'.$package.'</td>',
            '<td>'.$phoneNo.'</td>',
            '<td>'. $name.'</td>',
            '<td>'.$email.'</td>',
            '<td>'.$address.'</td>',
            '<td>'.$amount.'</td>',
            '<td>'.$userid.'</td>',
            '<td>'.$venueId.'</td>',
            '<td>'.$packageId.'</td>',
            '<td>'.$status.'</td>',

            '<td>

            <a href="CRUD_RESERVATION_UPDATE.php?updateID='.$id.'"><button id="btn1">Update</button></a>
            <a href="CRUD_RESERVATION_DELETE.php?deleteID='.$id.'"><button id="btn2">Delete</button></a>
            </td></tr>';
        }
    }
    ?>
  </tr>
</table>
</body>
</html>

