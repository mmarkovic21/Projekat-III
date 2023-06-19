
<?php


    require_once "../Controller/controllerAdmin.php";
    $con = new CONTROLLERADMIN();
    $error = isset($msg) ? $msg:"";
    $rezultat = isset($rez) ? $rez:"";
  if ($rezultat == ""){
    $rezultat = $con -> Get();
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


<div class="row p-3 justify-content-center align-items-center prva">
<div class="container">

    <div class="row justify-content-center text-center m-5 ">
        <h1>Rezervacije</h1>
    </div>
    <form action="indexSwitch.php" method="POST">
    <div class="row justify-content-between align-items-center p-5 shadow  rounded senka">
    <div class="col-5">
   <h2><span class="label label-success">Datum:</span></h2>
    <input type="date" class="form-control" name="datum" >
    <br>
    <h2><span class="label label-success">Ime firme:</span></h2>
    <input type="text" class="form-control" name="firma" placeholder="Ime fimre" >
    <input type="hidden" name="page" value="GetAll">
    </div>
    <div class="col-5 text-center">
    <button type="submit" class="btn btn-secondary btn-lg px-5 ">Pretraži</button>
    </div>
 

    </form>
    </div>


    </div>
        </div>



<?php
if($rezultat != null){
   
    ?>

   <div class="container-fluid p-5">
   <table class="table table-dark table-hover">
    <thead>
      <tr>
            <th>Datum</th>
            <th>Vreme</th>
            <th>Ime firme</th>
            <th>Ime i Prezime</th>
            <th>Usluga</th>
      </tr>
    </thead>
    <tbody>
    <?php
     foreach($rezultat as $ispis){?>
        <tr>
            <td><?php echo $ispis['datum']. ""?></td>
            <td><?php echo $ispis['vreme']. ""?></td>
            <td><?php echo $ispis['imeFirme']. ""?></td>
            <td><?php echo $ispis['ime']. " " . $ispis['prezime'] ?></td>
            <td><?php echo $ispis['naziv']. ""?></td>
        </tr>

 <?php } ?>
    </tbody>
  </table>
   </div>


<?php }?>
</body>
</html>