<?php
include_once 'config.php';
// Query to fetch reservations for the report
$sql = "SELECT * FROM reservation_data";
$result = $conn->query($sql);

// Check if there are reservations
if ($result->num_rows > 0) {
    // Generate the report data
    $reportData = array();
    while ($row = $result->fetch_assoc()) {
        $id=$row["Reservation_ID"];
        $date=$row["R_date"];
        $time=$row["R_time"];
        $guest=$row["No_Of_Guests"];
        $venue=$row["R_venue"];
        $package=$row["R_package"];
        $phoneno=$row["Contact_Number"];
        $Name=$row["R_FullName"];
        $Email=$row["R_Email"];
        $address=$row["R_address"];
        $total=$row["total"];
        $UserID=$row["userID"];
        $VenueID=$row["venue_id"];
        $PackageID=$row["package_id"];
        $status=$row["status"];
        // Add reservation data to the report
        $reportData[] = array(
            'Reservation ID' => $id,
            'Date' => $date,
            'Time' => $time,
            'Guests' => $guest,
            'Venue' => $venue,
            'Package' => $package,
            'Name' => $Name,
            'Email' => $Email,
            'Address' => $address,
            'Total' => $total,
            'UserID' => $UserID,
            'VenueID' => $VenueID,
            'PackageID' => $PackageID,
            'Status' => $status,
        );
    }

    // Generate the report file
    $filename = 'reservations_report.csv';
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