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
    <title>Oliveti komerc</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/Registracijastyle.css">
    

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
<div class="mid py-5 ">

<div class="container py-5 rounded shadow mt-4">
    <!--<div class="row justify-content-center align-item-center  py-5 text-center">-->
        <h3 class="text-center">  Registracija novog korisnika  </h3> <br>
  
    <form class="contact-form"  action="indexSwitch.php" method="GET">
        <div class="row justify-content-between p-5   border-pill senka">
    
          <div class="col-6 border-right">
            <input type="text" name="ime"  placeholder="Vaše ime...">
   
            <input type="text" name="prezime"  placeholder="Vaše prezime...">
                    
            <input type="text" name="email"  placeholder="Vaša email adresa...">
            
            <input type="password" name="lozinka"  placeholder="Vaša lozinka...">
           
            <input type="password" name="drlozinka"  placeholder="Ponovite vašu lozinku...">
            
          </div>
          <div class="col-6">
            <input type="text" name="imefirme"  placeholder="Ime vaše firme...">
            
            <input type="text" name="adresafirme"  placeholder="Adresa vaše firme...">

            <input type="text" name="grad"  placeholder="Grad...">

            <input type="hidden" name='page' value='registracija'>
    
            <button type="submit"  class="btn btn-lg btn-block mt-3">Registruj se</button>
    
          </div>
        </div>
      </form>
</div>

</div>


<footer class="row   pt-5 p-4 justify-content-center align-item-center bg-inverse footer-inner">
<div class="col-4 p-4">
  <h3>Mozete nas posetiti na adresi:</h3>
  <div class="row">
    <div class="col-2"><i class="fas fa-map-marker-alt px-2"></i></div>
  <div class="col-9"> Mutapova 3a <br> 32000 Cacak <br><br></div>
  </div>
</div>
  <div class="col-4 px-5 mr-5 border-left border-right">
    <h4>ili nas kontaktirajte putem telefona:</h4>
  <i class="fas fa-phone px-2"></i> 032/325-299 <br>
  <i class="fas fa-phone px-2"></i> 064/1274-408 <br>
  <i class="fas fa-phone px-2"></i> 063/633-398 <br><br>
  <h4>ili elektronske poste:</h4>
  <i class="fas fa-envelope px-2"></i> oliveti@gmail.com
  </div>

<div class="col-3">
  <h3>Radno vreme:</h3>
  Ponedeljak: 07:00 - 15:00 <br>
  Utorak: 07:00 - 15:00 <br>
  Sreda: 07:00 - 15:00 <br>
  Cetvrtak: 07:00 - 15:00 <br>
  Petak: 07:00 - 15:00 <br>
  Subota: 08:00 - 14:00 <br>
  Nedeljom ne radimo
</div>
</footer>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>