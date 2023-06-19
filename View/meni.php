<!-- meni pocetak -->
<!-- admin -->
<?php  if($korisnik == '1'){
  ?>
 <nav class="navbar navbar-expand-md bg-inverse meni navbar-dark">
    <a class="navbar-brand" href="index.php">Oliveti komerc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="usluge.php">Usluge</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="korisnik.php">Korisnici</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kase.php">Kase</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="ispis.php">Rezervacije</a>
        </li> 
      </ul>
      <ul class="navbar-nav ml-auto">
             <li class="nav-item ">
         <p class="nav-link"><?php echo $ime. ' ' . $prezime?></p>
        </li>    
         
        <li class="nav-item">
        <a class="nav-link" href="indexSwitch.php?page=odjavise">Odjavi se</a>
        </li>     
      </ul>
    </div>  
  </nav>
  <?php

// korisnik

}else if($korisnik == '2'){
  ?>
 <nav class="navbar navbar-expand-md bg-inverse meni navbar-dark">
    <a class="navbar-brand" href="index.php">Oliveti komerc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      
        <li class="nav-item">
          <a class="nav-link" href="AboutUs.php">O nama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Kontakt.php">Kontakt</a>
        </li> 
             <li class="nav-item">
             <a class="nav-link" href="Rezervacija.php">Rezervacija</a>
        </li>     
      </ul>
      <ul class="navbar-nav ml-auto">
             <li class="nav-item ">
         <p class="nav-link"><?php echo $ime. ' ' . $prezime?></p>
        </li>    
         
        <li class="nav-item">
        <a class="nav-link" href="indexSwitch.php?page=odjavise">Odjavi se</a>
        </li>     
      </ul>
    </div>  
  </nav>

<!-- nije ulogovan -->

  <?php
}else{
  ?>
 <nav class="navbar navbar-expand-md bg-inverse meni navbar-dark">
    <a class="navbar-brand" href="index.php">Oliveti komerc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="AboutUs.php">O nama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Kontakt.php">Kontakt</a>
        </li> 
      </ul>
      <ul class="navbar-nav ml-auto">
      
               <li class="nav-item">
          <a class="nav-link" href="Login.php">Uloguj se</a>
        </li>    
          
      </ul>
    </div>  
  </nav>
  <?php
} ?>

<!-- meni kraj -->

<!-- <div class="row p-3 justify-content-center align-items-center prva">

        </div> -->