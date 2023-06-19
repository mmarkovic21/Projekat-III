
<?php


require_once "../Controller/controllerAdmin.php";
$con = new CONTROLLERADMIN();
$error = isset($msg) ? $msg:"";


$rez = $con -> Kase();
$rezultat = isset($rez) ? $rez:"";



$korisnik = isset($_COOKIE['tip'])? ($_COOKIE['tip']): '';
$ime = isset($_COOKIE['ime'])? ($_COOKIE['ime']): '';
$prezime = isset($_COOKIE['prezime'])? ($_COOKIE['prezime']): '';

$message = isset($msg)? $msg:'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="../Css/style.css">
<link rel="stylesheet" href="../Css/ispis.css">


</head>
<body>

<!-- meni -->

<?php include "meni.php";?>


<?php
        if($message != ''){
            ?>
                 <div class="row justify-content-center  item-align-center items-center">
      
      <div class=" col-2 m-5 text-center alert alert-danger " role="alert">
                      <?php echo $message ?>
                  </div>
      
  </div>
            <?php
        }
   ?>

<div class="row p-3 justify-content-center align-items-center prva">
<div class="container p-4 mt-4">

  <div class="row justify-content-center p-5">
    <div class="col-3 m-2">
    <a href="Kase/dodajKasu.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Dodaj kasu</a>
    </div>
    <div class="col-3 m-2">
    <a href="Kase/izmeniKasu.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Izmeni kasu</a>
    </div>
    <div class="col-3 m-2">
    <a href="Kase/obrisiKasu.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Obriši kasu</a>
    </div>
  </div>

 
   

</div>
        </div>






<?php
if($rezultat != ''){

?>

<div class="container-fluid p-5">

<div class="row justify-content-center m-5">
  <div class="col-4 text-center">
  <h1><b>Kase</b></h1>
  </div>
</div>

<table class="table table-dark table-hover">
<thead>
  <tr>
        <th>Id</th>
        <th>Naziv kase</th>
        <th>Tip kase</th>
        
  </tr>
</thead>
<tbody>
<?php
 foreach($rezultat as $ispis){?>
    <tr>
        <td><?php echo $ispis['id']. ""?></td>
        <td><?php echo $ispis['naziv']. ""?></td>
        <td><?php echo $ispis['tip']. ""?></td>
    </tr>

<?php } ?>
</tbody>
</table>
</div>


<?php }?>
</body>
</html>