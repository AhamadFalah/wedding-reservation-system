<?php
include_once 'config.php';
$sql = "SELECT * FROM payments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $reportData = array();
    while ($row = $result->fetch_assoc()) {
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
        
        $reportData[] = array(
            'Payment ID' => $id,
            'Payment_Date' => $date,
            'Card_No' => $cardNo,
            'Customer_name' => $name,
            'Card_ExpiaryDate' => $expiarydate,
            'Card_CVV' => $cvv,
            'Amount' => $amount,
            'status' => $status,
            'Reservation_ID' => $rid,
            'Customer_ID' => $cid,
        );
    }

    $filename = 'transaction_report.csv';
    $file = fopen($filename, 'w');
    
    $header = array_keys($reportData[0]);
    fputcsv($file, $header);
    
    foreach ($reportData as $row) {
        fputcsv($file, $row);
    }
    
    fclose($file);
    
    echo '<a href="' . $filename . '">Download Report</a>';
} else {
    echo "No reservations found.";
}

$conn->close();
?>