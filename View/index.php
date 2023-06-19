
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
    <link rel="stylesheet" href="../Css/style1.css">
  </head>

<body>

<!-- meni -->

<?php include "meni.php";?>


    <div class="container-fluid">



     

        <div class="row p-3 justify-content-center align-items-center prva">

<div class="col-10">
  <img src="../images/naslovnaa_Fotor.png" alt="naslovna" class=" img-fluid  rounded senka">
</div>
        </div>

<div class="tekst container text-center">

</div>

<div class="row justify-content-center align-items-center m-4">
  <div class="col-9 text-center">
    <h1 class="pb-5">
      Sa Vama preko 20 godina
    </h1>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus qui maxime nulla odit, incidunt cum necessitatibus minima culpa aspernatur? Aperiam cumque labore voluptatem soluta beatae ad. Similique, sequi fugiat! Voluptate alias quo sunt praesentium fuga architecto in ex, impedit quod expedita vero, veniam magni hic. Commodi illo dicta ab delectus!
    </p>
  </div>
</div>

<section class="container">

  <div class="row justify-content-start align-items-center m-3">

  
    <div class="col-5 slika-blok"> 
    
      <img src="../images/pexels-blaz-erzetic-2628105.jpg" class="img-fluid rounded-circle senka slika " alt="Kancelarijska oprema">
    </div>
    
    <div class="col-5 ml-5 text-center">
      <h3>
        Servis
      </h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deleniti, eos perspiciatis quas quibusdam magnam necessitatibus molestias doloribus voluptates repudiandae! Molestiae quidem sunt tenetur dolorum repudiandae? Velit veniam in ratione!
      </p>
    </div>
   
  </div>



  <div class="row justify-content-end align-items-center m-3 py-5">
    
    <div class="col-5 mr-5 text-center">
      <h3>
        Bela tehnika
      </h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deleniti, eos perspiciatis quas quibusdam magnam necessitatibus molestias doloribus voluptates repudiandae! Molestiae quidem sunt tenetur dolorum repudiandae? Velit veniam in ratione!
      </p>
    </div>

    <div class="col-5">
      <img src="../images/pexels-andrey-matveev-4376052.jpg" class="img-fluid rounded-circle senka slika" alt="Kancelarijska oprema">
    </div>
   
  </div>


  <div class="row justify-content-start align-items-center m-3">
    <div class="col-5">
      <img src="../images/pexels-tim-gouw-53874.jpg" class="img-fluid rounded-circle senka slika" alt="Kancelarijska oprema">
    </div>
    <div class="col-5 ml-5 text-center">
      <h3>
        Kancelarijska oprema
      </h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deleniti, eos perspiciatis quas quibusdam magnam necessitatibus molestias doloribus voluptates repudiandae! Molestiae quidem sunt tenetur dolorum repudiandae? Velit veniam in ratione!
      </p>
    </div>
  </div>

</section>


<section>

<div class="row kraj justify-content-center align-content-center  ">

  <div class="col-7 my-auto kontaktirajte2 p-5">

    <div class="row m-5 align-items-center ">

      <div class="container m-5 ">

       <a href="Kontakt.html">
        <button type="button"  class="btn  dugme">
        
          <i class="fas fa-phone-alt fa-3x"> <br> Kontaktirajte <br> nas!</i>
        
        </button>
       </a>
       
      </div>
      
    </div>
 
  </div>
  <div class="col-5 kontaktirajte ">
  </div>
</div>



</section>




<footer class="row p-4 justify-content-center align-item-center bg-inverse">
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