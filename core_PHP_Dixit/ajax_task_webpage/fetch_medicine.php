<?php

// include 'dbconfig.php';

$conn = mysqli_connect("localhost", "root", "", "CHPL_Medical_DB");


$sql = "SELECT * FROM medicine";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $medicine = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $medicine[] = $row;
    }
    echo json_encode($medicine);
} else {
    echo json_encode(["message" => "No Data Found"]); 
}
