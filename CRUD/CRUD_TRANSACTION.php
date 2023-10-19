<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
#transaction {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#transaction td, #reservation th {
  border: 1px solid #ddd;
  padding: 8px;
}

#transaction tr:nth-child(even){background-color: #f2f2f2;}

#transaction tr:hover {background-color: #ddd;}

#transaction th {
  text-align: left;
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #04AA6D;
  color: white;
}
#btn1{
padding: 10px 20px;
border-radius: 4px;
margin-bottom: 10px;
background-color: green;
cursor: pointer;
color: #fff;
border: none;
font-size: 16px;
cursor: pointer;
}
#btn1:hover{
    background-color:lightgreen;
}
#btn2{
padding: 10px 20px;
border-radius: 4px;
background-color: red;
color: #fff;
cursor: pointer;
border: none;
font-size: 16px;
cursor: pointer;
}
#btn2:hover{
    background-color:lightcoral;
}
</style>
</head>
<body>
<h1>Transaction</h1>
<a href="GENERATE_TRANSACTION_REPORT.php"><button id="btn1">Generate Report</button></a>
<a href="../systemDash.php"><button id="btn1">Back</button></a>
<table id="transaction">
  <tr>
    <th>Payment_ID</th>
    <th>Transaction_Date</th>
    <th>CardNo</th>
    <th>Customer_Name</th>
    <th>Card_expiary</th>
    <th>Card_CVV</th>
    <th>Amount</th>
    <th>Status</th>
    <th>Reservation_ID</th>
    <th>Customer_ID</th>
    <th>Operations</th>
  </tr>
  <tr>
    <?php
    $sql="SELECT * FROM payments;";
    $result=mysqli_query($conn,$sql);
    if($result){
        //$row=mysqli_fetch_assoc($result);
        while($row=mysqli_fetch_assoc($result)){
          $id = $row["Payment_ID"];
          $date = $row["P_Date"];
          //$pid  = $row["PaymentA_ID"];
          $rid = $row["RID"];
          $cardNo=$row["cardNo"];
          //$method  = $row["P_Method"];
          $name=$row["Customer_name"];
          $expiarydate=$row["P_expire"];
          $cvv=$row["P_CVV"];
          $cid=$row["CID"];
          $amount  = $row["P_Amount"];
          $status  = $row["P_Status"];

            echo'<tr><td>'.$id.'</td>',
            '<td>'.$date.'</td>',
            '<td>'.$cardNo.'</td>',
            '<td>'.$name.'</td>',
            '<td>'.$expiarydate.'</td>',
            '<td>'.$cvv.'</td>',
            '<td>'.$amount.'</td>',
            '<td>'.$status.'</td>',
            '<td>'.$rid.'</td>',
            '<td>'.$cid.'</td>',
            '<td>

            <a href="CRUD_TRANSACTION_UPDATE.php?updateID='.$id.'"><button id="btn1">Update</button></a>
            <a href="CRUD_TRANSACTION_DELETE.php?deleteID='.$id.'"><button id="btn2">Delete</button></a>
            </td></tr>';
        }
    }
    ?>
  </tr>
</table>
</body>
</html>
<?php
?>

