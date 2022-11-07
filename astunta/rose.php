<?php
$color = "rose";

$color = '#f56dc4';
if($_SERVER['REQUEST_METHOD'] == "GET" ){
    header("Location: ./pink.php");
        die;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color ?>;">

    
   
    
</body>
</html>