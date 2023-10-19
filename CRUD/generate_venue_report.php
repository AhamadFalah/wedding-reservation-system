<?php
include_once 'config.php';
// Query to fetch reservations for the report
$sql = "SELECT * FROM wedding_venue";
$result = $conn->query($sql);

// Check if there are reservations
if ($result->num_rows > 0) {
    // Generate the report data
    $reportData = array();
    while ($row = $result->fetch_assoc()) {
        $id = $row["venue_id"];
        $name = $row["v_name"];
        $type = $row["v_type"];
        $capacity = $row["v_capacity"];
        $price = $row["price_per_event"];
    

        // Add reservation data to the report
        $reportData[] = array(
            'Venue ID' => $id,
            'Venue Name' => $name,
            'Venue Type' => $type,
            'Venue Capacity' => $capacity,
            'Price' => $price,
        );
    }

    // Generate the report file
    $filename = 'venue_repot.csv';
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
