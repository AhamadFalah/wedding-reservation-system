<?php
include_once 'config.php';
// Query to fetch reservations for the report
$sql = "SELECT * FROM contact_us";
$result = $conn->query($sql);

// Check if there are reservations
if ($result->num_rows > 0) {
    // Generate the report data
    $reportData = array();
    while ($row = $result->fetch_assoc()) {
        $id = $row["Contact_ID"];
        $name = $row["C_Name"];
        $phone = $row["C_PhoneNo"];
        $message = $row["C_Message"];
        $date = $row["Contact_date"];
        $email = $row["C_email"];
        $userID = $row["userID"];
        // Add reservation data to the report
        $reportData[] = array(
            'Contact ID' => $id,
            'Contact Name' => $name,
            'PhoneNo' => $phone,
            'Message' => $message,
            'Date' => $date,
            'Email' => $email,
            'UserID' => $userID,
        );
    }

    // Generate the report file
    $filename = 'inquiry_report.csv';
    $file = fopen($filename, 'w');
    
    // Write the column headers
    $header = array_keys($reportData[0]);
    fputcsv($file, $header);
    
    // Write the reservation data
    foreach ($reportData as $row) {
        fputcsv($file, $row);
    }
    
    fclose($file);
    
    // Provide download link for the report
    echo '<a href="' . $filename . '">Download Report</a>';
} else {
    echo "No reservations found.";
}

$conn->close();
?>
