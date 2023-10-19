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

<h1>Package</h1>
<a href="wedding_package.php"><button id="btn1">Add new package</button></a>
<a href="generate_package_report.php"><button id="btn1">Generate report</button></a>
<a href="../systemDash.php"><button id="btn1">Back</button></a>
<table id="customers">
  <tr>
    <th>Package_ID</th>
    <th>Package_Name</th>
    <th>Package_Price</th>
    <th>Operations</th>
  </tr>
  <tr>
    <?php
    $sql="SELECT * FROM wedding_package;";//fecches the rows from the package table in the database
    $result=mysqli_query($conn,$sql);
    if($result){
        //$row=mysqli_fetch_assoc($result);
        while($row=mysqli_fetch_assoc($result)){//makes sure that all the rows are taken or considered or  diplayed
            $id=$row["package_ID"];//since the associtive array was assign to the $row we can use like this to get the vlaues from the table
            $name=$row["P_name"];
            $price=$row["price"];
            echo'<tr><td>'.$id.'</td>',//diplays the values as data of a row
            '<td>'.$name.'</td>',
            '<td>'.$price.'</td>',
            '<td>
            <a href="package_update.php?updateID='.$id.'"><button id="btn1">Update</button></a>
            <a href="package_delete.php?deleteID='.$id.'"><button id="btn2">Delete</button></a>
            </td></tr>';
        }
    }
    ?>
  </tr>
</table>

</body>
</html>


