<?php
  $korisnik = isset($_COOKIE['tip'])? ($_COOKIE['tip']): '';
  $ime = isset($_COOKIE['ime'])? ($_COOKIE['ime']): '';
  $prezime = isset($_COOKIE['prezime'])? ($_COOKIE['prezime']): '';
 
  $message = isset($msg)? $msg:'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oliveti komerc - kontakt</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/style1.css">
    <link rel="stylesheet" href="../Css/kontakt.css">
</head>
<body>


    
<!-- meni -->

<?php include "meni.php";?>

<div class="row p-3 justify-content-center align-items-center prva">
<div class="pocetak text-center mt-5 mb-5 ml-5 border-bottom">
  <h2 class='text-white'>Kontaktirajte nas</h2> <br>
  <h3><i>Kako Vam možemo pomoći?</i></h3>
  <h4><i>Koristite formu ispod za sve nedoumice i pitanja koja imate.</i></h4><br><br>
</div>
</div>

<div class="container-fluid glavno">
  <div class="row justify-content-center">
  <div class="col-sm-10 p-2">
  <form class="contact-form" autocomplete="off" action="forma.php" method="POST">
      <div class="row justify-content-between p-5 my-2">
        <div class="col-1"></div>
        <div class="col-5 border-right prvi">
          <h3 class="border-bottom mb-5 text-dark">Kontaktirajte nas</h3>
          <p>Vaše ime: </p>
          <input type="text" name="ime" class=" my-1 px-4" value='<?php echo $ime?>' placeholder="<?php echo $ime?>">
          <p>Vaše prezime: </p>
          <input type="text" name="prezime" class=" my-2 px-4" value='<?php echo $prezime?>' placeholder="<?php echo $prezime?>">
          <p>Vaša e-mail adresa: </p>
          <input type="text" name="email" class=" mb-5 px-4" placeholder="Vaša email adresa...">
          
        </div>
        <div class="col-6 border-left drugi">
          <textarea class="p-4 mt-2" name="poruka" id="poruka" cols="30" rows="10" placeholder="Vaša poruka..."></textarea>
  
          <button type="submit" name="submit" class="btn btn-lg btn-block mt-3">Pošalji poruku</button>
  
        </div>
      </div>
    </form>
  </div>
  <div class="col-sm-12 text-center p-5 kraj mt-5 border-top">
    <h3>Upoznajte naš brilijantni i pouzdan tim za podršku!</h3>
    <h5><i>Svaki vid podrške je dostupan Pon-Pet 07h-19h</i></h5>
    <div class="row mt-1">
    <div class="col-4 p-4">
      <a href="AboutUs.php">
        <img src="../Strahinja.jpg" alt="Strahinja Ristic" class="rounded-circle" height="200px" width="200px">
        <h5 class="mt-2">Strahinja Ristić</h5>
      </a>
    </div>
    <div class="col-4 p-4">
      <a href="AboutUs.php">
      <img src="../Marija.jpg" alt="Strahinja Ristic" class="rounded-circle" height="200px" width="200px">
      <h5 class="mt-2">Marija Marković</h5>  
      </a>
    </div>
    <div class="col-4 p-4">
      <a href="AboutUs.php">
      <img src="../Dragana.jpg" alt="Strahinja Ristic" class="rounded-circle" height="200px" width="200px">
      <h5 class="mt-2">Dragana Obrenović</h5>
      </a>
    </div>
    </div>
  </div>
</div>


 
<footer class="row p-4 justify-content-center align-item-center bg-inverse footer-inner">
<div class="col-4 p-4">
  <h3>Možete nas posetiti na adresi:</h3>
  <div class="row">
    <div class="col-2"><i class="fas fa-map-marker-alt px-2"></i></div>
  <div class="col-9"> Mutapova 3a <br> 32000 Čačak <br><br></div>
  </div>
</div>
  <div class="col-4 px-5 mr-5 border-left border-right">
    <h4>ili nas kontaktirajte putem telefona:</h4>
  <i class="fas fa-phone px-2"></i> 032/325-299 <br>
  <i class="fas fa-phone px-2"></i> 064/1274-408 <br>
  <i class="fas fa-phone px-2"></i> 063/633-398 <br><br>
  <h4>ili elektronske pošte:</h4>
  <i class="fas fa-envelope px-2"></i> oliveti@gmail.com
  </div>

<div class="col-3">
  <h3>Radno vreme:</h3>
  Ponedeljak: 07:00 - 15:00 <br>
  Utorak: 07:00 - 15:00 <br>
  Sreda: 07:00 - 15:00 <br>
  Četvrtak: 07:00 - 15:00 <br>
  Petak: 07:00 - 15:00 <br>
  Subota: 08:00 - 14:00 <br>
  Nedeljom ne radimo
</div>
</footer>






    
</body>
</html>