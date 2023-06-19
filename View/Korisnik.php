
<?php


require_once "../Controller/controllerAdmin.php";
$con = new CONTROLLERADMIN();
$error = isset($msg) ? $msg:"";
$rezultat = isset($rez) ? $rez:"";
if ($rezultat == ""){
$rezultat = $con -> SviKorisnici();
}


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
                 <div class="row justify-content-center item-align-center items-center">
      
      <div class=" col-2 m-5 text-center alert alert-danger " role="alert">
                      <?php echo $message ?>
                  </div>
      
  </div>
            <?php
        }
   ?>

<div class="row p-3 justify-content-center align-items-center prva">

<div class="container">

<div class="row justify-content-center text-center m-5 ">
    <h1>Kreiraj administratora</h1>
</div>




<form action="indexSwitch.php" method="POST">
<div class="row justify-content-between align-items-center p-5 shadow rounded senka">
<div class="col-5">
<h4><span class="label label-success">Ime:</span></h4>
<input type="text" class="form-control" name="ime" >
<br>
<h4><span class="label label-success">Prezime:</span></h4>
<input type="text" class="form-control" name="prezime" >
<br>


<input type="hidden" name="page" value="administrator">
</div>
<div class="col-5 text-center">

<h4><span class="label label-success">Email:</span></h4>
<input type="email" class="form-control" name="email" >
<br>
<h4><span class="label label-success">Lozinka</span></h4>
<input type="text" class="form-control" name="lozinka" >
<br>
<br>

<button type="submit" class="btn btn-secondary btn-lg px-5 ">Kreiraj administratora</button>
</div>


</form>
</div>
        </div>






</div>

<div class="container-fluid p-5">

<div class="row justify-centent-between my-5 ">

<?php
foreach($rezultat as $prom){
  ?>
  <div class="col-4 p-5 text-center">
  <div class="card bg-secondary rounded-circle p-3 senka border " >
 <?php  if($prom['idTip'] == 1 ){
   ?>  <i class="fas fa-user m-5 fa-7x"></i>

   <?php
 }else{
   ?>  <i class="far fa-user m-5 fa-7x"></i>
   <?php
 }?>
  <div class="card-body">
    <h3 class="card-title"><b><?php echo $prom['ime']. ' ' .$prom['prezime'] ?></b></h3>
    <p class="card-text"><?php echo $prom['email'] ?></p>
    <p class="card-text"><?php echo $prom['imeFirme'] ?></p>
    <p class="card-text"><?php echo $prom['adresaFirme'] ?></p>
    <p class="card-text"><?php echo $prom['grad'] ?></p>
    
  </div>
</div>
  </div>
  <?php
}
?>

</div>


</div>


</body>
</html>