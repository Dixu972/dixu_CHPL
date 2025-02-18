<?php

$conn=mysqli_connect("localhost","root","","CHPL_Medical_DB");

$sql="SELECT * FROM contact_us";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $contact=array();
    while($row=mysqli_fetch_assoc($result)){
        $contact[]=$row;
    }
    echo json_encode($contact);
}else{
    echo "No Data Found";
}
?>