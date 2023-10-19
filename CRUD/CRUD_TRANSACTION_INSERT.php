<?php
 $id = $_POST["Payment_ID"];
 $date = $_POST["P_Date"];
 $pid  = $_POST["PaymentA_ID"];
 $rid = $_POST["RID"];
 $method  = $_POST["P_Method"];
 $amount  = $_POST["P_Amount"];
 $status  = $_POST["P_Status"];
include 'config.php';
include 'CRUD_FUNCTIONS.php';
create_transaction($conn,$id,$date,$pid,$rid,$method,$amount,$status)
?>