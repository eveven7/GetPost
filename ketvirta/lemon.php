<!-- Sukurkite du puslapius lemon.php ir orange.php. Jų fonus nuspalvinkite atitinkamom spalvom. Į lemon.php puslapį įdėkite kodą, kuris naršyklę visada peradresuotų į puslapį orange.php. Pademonstruokite veikimą. -->

<?php
$color = "lemon";

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $color = $_GET['color'];
    header("Location: ./orange.php");
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