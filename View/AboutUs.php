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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O nama</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/ispis.css">
    <link rel="stylesheet" href="../Css/AboutUs.css">
</head>
<body>
<?php include "meni.php";?>
   

   <!-- <div class="container-fluid text-center">
      <div class="row justify-content-center align-item-center prva">
        <h2 class="text-white mt-4">O nama</h2>

        <h5> Na ovom projektu su radili apsolventi sa Fakulteta Tehničkih nauka u Čačku. Sam sajt je namenjen za izvršavanje rezervacija određenih usluga, zakazivanje usluga koje servis vrši.</h5>
        
      </div>
      <div class="row kraj"></div>    

    </div>-->

    
    <section class="background firstsection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big border-bottom">O NAMA</p>
  
                <p class="text-small">
                    U ovom delu će te se upoznati bolje sa članovima tima
                    koji su učestvovali u izradi sajta!
                </p>
  
                <br>
                  
                <p class="center">
                  Na ovom sajtu su radili apsolventi Fakulteta tehničkih nauka u Čačku.
                  U nastavku će biti detaljnije informacije o samim članovima tima.
                </p>
                <p class="border-bottom"></p>
  
            </div>
        </div>
    </section>
  
    <div class="row justify-content-center mb-3 p-5 border-top border-bottom">
      <div class="col-3 text-center">
      <h2>Dokumentacija</h2>
    <a href="https://pdfhost.io/v/hdVFd3aq0_IPservisFiskalnihKasapdf.pdf" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Preuzmi</a>
      </div>
    </div>

    <section class="service">
        <h1 class="h-primary center" style=
            "margin-top:21px; text-align:center; font-family: 'Piazzolla', serif; font-weight: bold;">
            Naš tim
        </h1>
          
        <div id="service" class="kraj">
            <div class="box">
                <img src="../Strahinja.jpg" alt="Slika ne može da se učita!">
                <br>
                  <p class="center">
                    <p
                        style="text-decoration:none;color:black;
                        font-weight:bold;font-family: 'Sansita Swashed', cursive">
                        Strahinja Ristić
</p> </p>
<br>            
                      <p> Rođen 01.12.1998. godine u Čačku. Student četvrte godine Informacionih tehnologija. Završio srednju tehničku školu u Čačku, 
                        smer: elektrotehničar elektronike, gde je bio vukovac. Hobiji su mu: košarka, akvarista, kuvanje, kućni ljubimci, fotografija, ribolov, plivanje, stolarija.
                      </p> 
                      <p>E-mail: strahinjaristic01@gmail.com</p> 
                      <p>Osobine: kreativan, uporan, ambiciozan, timski igrač, logičar, avanturista, spontan, optimističan, kooperativan, samostalan.</p>
</div>
  
            <div class="box">
                <img src= "../Marija.jpg" alt="Slika ne može da se učita!">
                <br>
  
                <p class="center">
                    <p
                        style="text-decoration:none;color:black;
                        font-weight:bold;font-family: 'Sansita Swashed', cursive">
                        Marija Marković
</p></p>
<br>
                 
                    <p>Rođena 21.06.1998. godine u Čačku. Student četvrte godine Informacionih tehnologija. Završila srednju školu u Čačku - Gimnazija, 
                        smer: društveno - jezički. Zna dva strana jezika: engleski i nemački. Voli umetnost i da crta. Hobiji: pilates, teretana, šitanje, moda, šminkanje, putovanja, fotografija, kuvanje.</p>
                    <p>E-mail: marijamarkovic21@gmail.com</p>             
                    <p>Osobine: odgovorna, komunikativna, uporna, tvrdoglava, kreativna, avanturista, timski igrač, optimistična, analitična, ambiciozna.</p>
  
</div>
        
            <div class="box">
                <img src= "../Dragana.jpg" alt="Slika ne može da se učita!">
                <br>
                <p class="center">
                    <p style="text-decoration:none;
                        color:black;font-weight:bold;
                        font-family: 'Sansita Swashed', cursive">
                        Dragana Obrenović
</p></p>
<br>  
                  
                    <p>Rođena 28.11.1998. godine u Požezi. Student četvrte godine Informacionih tehnologija. Završila srednju tehničku školu u Požezi, 
                    smer: poslovni administrator. Voli poslove vezane za organizaciju. Hobiji: fotografija, šminkanje, putovanja, kuvanje, plesanje, izrada ukrasa.</p>
                    <p>E-mail: draganaob12@gmail.com</p>             
                    <p>Osobine: komunikativna, uporna, timski igrač, odgovorna, intuitivna, optimistična, tolerantna, spontana, dosledna.</p>
  
  
            </div>
        </div></div>

        <footer class="row   pt-5 p-4 justify-content-center align-item-center bg-inverse footer-inner">
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


      </section>



</body>
</html>