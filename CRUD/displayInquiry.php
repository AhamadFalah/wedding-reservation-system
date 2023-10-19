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

<h1>Inquiry</h1>
<a href="generate_inquiry_report.php"><button id="btn1">Generate report</button></a>
<a href="../systemDash.php"><button id="btn1">Back</button></a>
<table id="customers">
  <tr>
    <th>Contact_ID</th>
    <th>C_name</th>
    <th>C_PhoneNo</th>
    <th>C_message</th>
    <th>Contact_date</th>
    <th>C_email</th>
    <th>UserID</th>
    <th>Operations</th>
  </tr>
  <tr>
    <?php
    $sql="SELECT * FROM contact_us;";
    $result=mysqli_query($conn,$sql);
    if($result){
        //$row=mysqli_fetch_assoc($result);
        while($row=mysqli_fetch_assoc($result)){
            $id=$row["Contact_ID"];
            $name=$row["C_Name"];
            $phone=$row["C_PhoneNo"];
            $message=$row["C_Message"];
            $date=$row["Contact_date"];
            $email=$row["C_email"];
            $UserID=$row["userID"];
            echo'<tr><td>'.$id.'</td>',
            '<td>'.$name.'</td>',
            '<td>'.$phone.'</td>',
            '<td>'.$message.'</td>',
            '<td>'.$date.'</td>',
            '<td>'.$email.'</td>',
            '<td>'.$UserID.'</td>',
            '<td>
            <a href="inquiry_update.php?updateID='.$id.'"><button id="btn1">Update</button></a>
            <a href="inquiry_delete.php?deleteID='.$id.'"><button id="btn2">Delete</button></a>
            </td></tr>';
        }
    }
    ?>
  </tr>
</table>

</body>
</html>


