<?php
$color = "blue";


if(isset( $_GET['r']) ){
    header("Location: ./red.php");
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

    
<a href="./blue.php?r">BLUE</a>


</body>
</html>