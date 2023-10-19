<?php
include_once 'config.php';
// Query to fetch reservations for the report
$sql = "SELECT * FROM wedding_package";
$result = $conn->query($sql);

// Check if there are reservations
if ($result->num_rows > 0) {
    // Generate the report data
    $reportData = array();
    while ($row = $result->fetch_assoc()) {
        $id = $row["package_ID"];
        $name = $row["P_name"];
        $price= $row["price"];
        // Add reservation data to the report
        $reportData[] = array(
            'Package ID' => $id,
            'Package name' => $name,
            'Price_Per_Person' => $price,
        );
    }

    // Generate the report file
    $filename = 'package_report.csv';
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
