<?php

// include 'dbconfig.php';

$conn = mysqli_connect("localhost", "root", "", "CHPL_Medical_DB");


$sql = "SELECT * FROM about_us WHERE id=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $about = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $about[] = $row;
    }
    echo json_encode($about);
} else {
    echo json_encode(["message" => "No Data Found"]); 
}

?>