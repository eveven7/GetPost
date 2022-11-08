<!-- sukurti puslapį su duomenų suvedimo formą. Duomenis saugoti sesijos 2d masyve. atvaizduoti duomenis HTML table. -->

<?php
$color = "#ea6c70";

session_start();

if(!isset($_SESSION['forms'])){
    $_SESSION['forms'] = [] ;
}


if (isset($_POST['submit'])) {
    $_SESSION['forms'][] = $_POST;
}

if (isset($_POST['delete'])) {
    
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
    <link rel="stylesheet" href="/style.css">
</head>
<body style="background-color:<?= $color ?>;">

        <form action="" method="post">
                             <div class="h1"> Smart Goal </div>
                             <br>
     
                         <div class="form-outline mb-4">
                            <input type="text" name="form1" class="form-control" />
                            <label class="form-label" for="form2Example1 "  > Career</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="form2" class="form-control" />
                            <label class="form-label" for="form2Example1" >Family and Friends</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="form3" class="form-control" />
                            <label class="form-label" for="form2Example1" >Health</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="form4" class="form-control" />
                            <label class="form-label" for="form2Example1" >Personal Growth</label>
                        </div>
                        <br>
                        <input type="hidden" name="form_submitted" value="1" />
                        <input type="submit" class="btn btn-primary btn-block mb-4" value="Submit" name="submit">

                        <form id="delete" method="post" action="" class="forms">
                     <input type="hidden" name="delete_rec_id" value="<?php print $id; ?>"/> 
                    <input type="submit" class="btn btn-primary btn-block mb-4" name="delete" value="Delete Everything!"/>    


</form>





<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Career</th>
      <th scope="col">Family and Friends</th>
      <th scope="col">Health</th>
      <th scope="col">Personal Growth</th>
    </tr>
  </thead>
  <tbody>
<?php

    foreach ($_SESSION["forms"] as $form => $value ) { 
        
        ?> 
        <tr  class="table-success">

        <td> <?php echo $value['form1'];?> </td>
            <td> <?php echo $value['form2'];?> </td>
            <td> <?php echo $value['form3'];?> </td>
            <td> <?php echo $value['form4'];?> </td>

    
        <tr>
          
    </tr>
       
      
<?php
    }
?>
</tbody>
</table>
   
</body>
</html>