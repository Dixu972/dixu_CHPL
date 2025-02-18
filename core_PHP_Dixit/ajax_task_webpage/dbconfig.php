<?php

$conn = mysqli_connect("localhost","root","","CHPL_Medical_DB");

if(!$conn){
    die("connection failed : ".mysqli_connect_error());
}

echo "Connection Successfully !";


?>