<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
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

<h1>Venue</h1>
<a href="wedding_venuesfromAdmin.php"><button id="btn1">Add new venue</button></a>
<a href="generate_venue_report.php"><button id="btn1">Generate report</button></a>
<a href="../systemDash.php"><button id="btn1">Back</button></a>
<table id="customers">
  <tr>
    <th>Venue_ID</th>
    <th>Venue_Name</th>
    <th>Venue_Type</th>
    <th>Venue_Capacity</th>
    <th>Venue_Price</th>
    <th>Operations</th>
  </tr>
  <tr>
    <?php
    $sql="SELECT * FROM wedding_venue;";
    $result=mysqli_query($conn,$sql);
    if($result){
        //$row=mysqli_fetch_assoc($result);
        while($row=mysqli_fetch_assoc($result)){
            $id=$row["venue_id"];
            $name=$row["v_name"];
            $type=$row["v_type"];
            $capacity=$row["v_capacity"];
            $price=$row["price_per_event"];
            echo'<tr><td>'.$id.'</td>',
            '<td>'.$name.'</td>',
            '<td>'.$type.'</td>',
            '<td>'.$capacity.'</td>',
            '<td>'.$price.'</td>',
            '<td>
            <a href="venue_Update.php?updateID='.$id.'"><button id="btn1">Update</button></a>
            <a href="venue_Delete.php?deleteID='.$id.'"><button id="btn2">Delete</button></a>
            </td></tr>';
        }
    }
    ?>
  </tr>
</table>

</body>
</html>


