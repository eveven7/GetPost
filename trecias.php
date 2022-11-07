<?php
$color = "pink";


if(isset( $_GET['color'] )){
    $color = $_GET['color'];
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

    
    <form action="" method="get">
        <input type="text" name="color">
               <button type="submit">Send!</button>
    </form>

</body>
</html>