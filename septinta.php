<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = "yellow";
    header("Location: ./septinta.php");
    die;
  } else {
    $color = "green";
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
<body  style="background-color:<?= $color ?>;">

<!-- 7 uzduotis  -->
        <form action="" method="post">
            <button type="submit"> Press Yellow!</button>
        </form>

        <form action="" method="get">
            <button type="submit"> Press Green!</button>
        </form>

</body>
</html>