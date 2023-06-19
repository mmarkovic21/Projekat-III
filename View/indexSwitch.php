<?php
require_once '../Controller/controllerKorisnik.php';
require_once '../Controller/controllerAdmin.php';
$page =isset ($_GET['page'])? $_GET['page']: "";
if($page == ''){
    $page = $_POST['page'];
}

$con = new CONTROLLERKORISNIK();
$adm = new CONTROLLERADMIN();
switch($page){
    case 'login':
        $pom = $con->login();
        if($pom == 1){
            header ('Location: index.php');
        }else if($pom == 2){
            header ('Location: index.php');
        }else if($pom == 3){
            $msg = 'Ne postoji takav korisnik';
            include 'login.php';
        }else if($pom == 4){
            $msg = 'Nisu uneti podaci';
            include 'login.php';
        }
        
    break;
    case 'registracija':
        $pom = $con->registracija();
        if($pom == true){
            header ('Location: login.php');
        }
        
    break;

    case 'GetAll':
     $adm->GetAll();
        
        break;
     case 'rezervacija':
    $con->rezervacija();
               
        break;
        case 'odjavise':
            $con->odjavise();
                       
        break;

        case 'dodajUslugu':
            $adm->dodajUslugu();
                       
        break;
        case 'izmeniUslugu':
            $adm->izmeniUslugu();
                       
        break;
        case 'obrisiUslugu':
            $adm->obrisiUslugu();
                       
        break;


        case 'dodajKasu':
            $adm->dodajKasu();
                       
        break;
        case 'izmeniKasu':
            $adm->izmeniKasu();
                       
        break;
        case 'obrisiKasu':
            $adm->obrisiKasu();
                       
        break;


        case 'administrator':
            $adm->administrator();
                       
        break;
       
}


?> 