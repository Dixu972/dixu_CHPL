<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Your File Name :  <?php
    
    $name = $_FILES["pic"]["name"];
    
    echo "File actual name is $name";

    ?></h1>
</body>

</html>