<?php
$color='orange';
$masyvasRaides = ['A','B','C','D','E','F','G','H','I','J'];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkbox'])){
echo count(($_POST['checkbox'])).'/'.$_POST['times'];
$color='white';
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
<body style="background-color:<?= $color?>;">
<style>
.lbl{
    color:white;
}
</style>
 <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
    <form action="" method="post">
 <?php for ($i=0; $i < rand(3,10); $i++) { ?>
      <label class="lbl" for="a <?= $i ?>"><?=$masyvasRaides[$i]?></label>
      <input type="checkbox" name="checkbox[]" id="a <?= $i ?>">
      <br>
 <?php } ?>
 <input type="hidden" name="times" value="<?= $i ?>">
    <br>  <button type="submit">PRESS</button> 
    </form>
 <?php } ?>
</body>
</html>