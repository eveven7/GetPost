<!-- Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. Šone yra rodomas žaidėjų rezultatas. Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”. Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato, o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė “mesti kauliuką”). Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo. -->
<?php

$color = "#AEB2D5";
session_start();

if(!isset($_SESSION['players'])){
    $_SESSION['players'] = [] ;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $_SESSION['player1'] = $_POST['player1'];
    $_SESSION['player2'] = $_POST['player12'];
    $_SESSION['result1'] = $p1result;
    $_SESSION['result2'] = $p2result;


    header('Location:http://localhost/GetPost/vienuolikta/vienuolikta.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body style="background-color:<?= $color ?>;">
<body>


                        <form action="" method="post">
                             <div class="h1"> GAME </div>
                             <br>
                        <div class="form-outline mb-4">
                        <input type="text" name="player1" class="form-control" />
                        <label class="form-label" for="form2Example1 "  > PLAYER 1</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="text" name="player2" class="form-control" />
                        <label class="form-label" for="form2Example1 "  > PLAYER 2</label>
                        </div>
                        <button class="btn btn-primary btn-centered" id="submit">Start</button>

                        <button class="btn btn-primary btn-centered" id="rollit">Click the button to roll it</button>

</body>
</html>