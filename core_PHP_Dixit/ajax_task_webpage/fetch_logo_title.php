<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// include 'dbconfig.php';

$conn = mysqli_connect("localhost", "root", "", "CHPL_Medical_DB");

// Fetch data
$sql = "SELECT logo_url, title FROM logo_title WHERE id = 1"; // Adjust the WHERE clause as needed
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'No data found']);
    }
} else {
    echo json_encode(['error' => 'Query failed: ' . $conn->error]);
}

$conn->close();
?>