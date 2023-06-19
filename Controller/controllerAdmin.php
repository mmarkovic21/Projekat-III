<?php
require_once "../DAO/DAOAdmin.php";


$action = isset($_REQUEST["action"])? $_REQUEST["action"] : ""; //provera da li je setovana akcija

class CONTROLLERADMIN{
   
    function GetAll(){
        $dao = new DAOADMIN();
        
        $datum = isset($_POST ['datum'])? $_POST['datum']:'';
        $firma = isset($_POST ['firma'])? $_POST['firma']:'';

        if($datum != '' && $firma != ''){
            
            $rez = $dao->GetDatumFirma($datum,$firma);
            include_once ('../View/ispis.php');
        }
        else if($datum == '' && $firma != ''){
            
            $rez = $dao->GetFirma($firma);
            include_once ('../View/ispis.php');
        }else if($datum != '' && $firma == ''){
            
            $rez = $dao->GetDatum($datum);
           include_once ('../View/ispis.php');
        }
    else
    $msg = "Nije pronadjena takva rezervacija!";
    include_once ('../View/ispis.php');
}

function Get(){
    $dao = new DAOADMIN();
    $rez = $dao->Get();
    return $rez;
}
function SviKorisnici(){
    $dao = new DAOADMIN();
    $rez = $dao->SviKorisnici();
    return $rez;
}

function Usluge(){
    $dao = new DAOADMIN();
    $rez = $dao->Usluge();
    return $rez;
}

function Kase(){
    $dao = new DAOADMIN();
    $rez = $dao->Kase();
    return $rez;
}

function dodajuslugu(){
    $naziv = isset($_POST['naziv'])? $_POST['naziv']: '';
    $cena = isset($_POST['cena'])? $_POST['cena']: '';

    if($naziv != '' && $cena != ''){
        $dao = new DAOADMIN();
        $dao -> dodajuslugu($naziv, $cena);
        header ("Location: ../View/usluge.php");    
      }else{
            $msg = "Nisu uneti svi podaci!";
            include "../View/usluge.php";
        }


}
function izmeniUslugu(){
    $id = isset($_POST['id'])? $_POST['id']: '';
    $naziv = isset($_POST['naziv'])? $_POST['naziv']: '';
    $cena = isset($_POST['cena'])? $_POST['cena']: '';

    if($naziv != '' && $cena != '' && $id != ''){
        $dao = new DAOADMIN();
        $dao -> izmeniUslugu($naziv, $cena, $id);
        header ("Location: ../View/usluge.php");      }
        else{
            $msg = "Nisu uneti svi podaci!";
            include "../View/usluge.php";
        }


}

function obrisiUslugu(){
    $id = isset($_POST['id'])? $_POST['id']: '';
  

    if($id != ''){
        $dao = new DAOADMIN();
        $dao -> obrisiUslugu($id);
        header ("Location: ../View/usluge.php");    }
        else{
            $msg = "Nije unet id!";
            include "../View/usluge.php";
        }


}





function dodajKasu(){
    $naziv = isset($_POST['naziv'])? $_POST['naziv']: '';
    $tip = isset($_POST['tip'])? $_POST['tip']: '';

    if($naziv != '' && $tip != ''){
        $dao = new DAOADMIN();
        $dao -> dodajKasu($naziv, $tip);
        header ("Location: ../View/kase.php");
    }    else{
        $msg = "Nisu uneti svi podaci!";
        include "../View/kase.php";
    }



}
function izmeniKasu(){
    $id = isset($_POST['id'])? $_POST['id']: '';
    $naziv = isset($_POST['naziv'])? $_POST['naziv']: '';
    $tip = isset($_POST['tip'])? $_POST['tip']: '';

    if($naziv != '' && $tip != '' && $id != ''){
        $dao = new DAOADMIN();
        $dao -> izmeniKasu($naziv, $tip, $id);
        header ("Location: ../View/kase.php");    
    }   else{
        $msg = "Nisu uneti svi podaci!";
        include "../View/kase.php";
    }



}

function obrisiKasu(){
    $id = isset($_POST['id'])? $_POST['id']: '';
  

    if($id != ''){
        $dao = new DAOADMIN();
        $dao -> obrisiKasu($id);
        header ("Location: ../View/kase.php");    
    }  else{
        $msg = "Nije unet id!";
        include "../View/kase.php";
    }


}



function administrator(){
    $ime = isset($_POST['ime'])? $_POST['ime']: '';
    $prezime = isset($_POST['prezime'])? $_POST['prezime']: '';
    $email = isset($_POST['email'])? $_POST['email']: '';
    $lozinka = isset($_POST['lozinka'])? $_POST['lozinka']: '';
    $grad = "Cacak";
    $firma = "Oliveti";
    $adresa = "Mutapova";
    $id = 1;

    if($ime != '' && $prezime != '' && $email != '' && $lozinka!=''){
        $dao = new DAOADMIN();
        $dao -> administrator($ime, $prezime, $email, $lozinka, $firma, $adresa, $grad, $id);
        include '../View/Korisnik.php';
    }
    else{
        $msg = "Nisu uneti svi potrebni podaci!";
        include "../View/Korisnik.php";
    }
}




}

if ($_SERVER['REQUEST_METHOD']="POST"){
    //akcije za unos i izmenu
    if ($action == 'akcijaPost1') {
       // $podatak = isset($_POST["podatak"])? test_input($_POST["podatak"]) : ""; //provera da li su setovani podaci
       //...
    } elseif ($action == 'akcijaPost2') {
        // $podatak = isset($_POST["podatak"])? test_input($_POST["podatak"]) : ""; //provera da li su setovani podaci
        //...
    } 
    
} elseif ($_SERVER['REQUEST_METHOD']="GET"){
    //akcije za prikaz i brisanje
    if ($action == 'akcijaGet1') {
        //...
    } elseif ($action == 'akcijaGet2'){
        //...
    }elseif ($action == 'akcijaGet3'){
        //...
    }
    
} else {
    //...
    header("Location: index.php"); //opciono
    die();
}

//funkcija za preradu unetih podataka
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>