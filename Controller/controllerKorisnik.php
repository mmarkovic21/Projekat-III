<?php
require '../DAO/DAOKorisnik.php';


$action = isset($_REQUEST["action"])? $_REQUEST["action"] : ""; //provera da li je setovana akcija

class CONTROLLERKORISNIK{
    function login(){
        $email = isset($_GET['email'])? test_input($_GET['email']):'';
        $lozinka = isset($_GET['password'])? test_input($_GET['password']):'';

        if($email != '' && $lozinka != ''){
            $dao = new DAOKORISNIK();
            $rez = $dao->login($email,$lozinka);
            if($rez != null){
            if($rez['idTip'] == 1){
                setcookie('ime', $rez['ime'],time() + 60*60,"/");
            setcookie('prezime', $rez['prezime'],time() + 60*60,"/");
            setcookie('idKorisnika', $rez['id'],time() + 60*60,"/");
            setcookie('tip', $rez['idTip'],time() + 60*60,"/");
            $_SESSION['korisnik'] = time();
                return 1;
                
            }else
            if($rez['idTip'] == 2)
            {
            
            setcookie('ime', $rez['ime'],time() + 60*60,"/");
            setcookie('prezime', $rez['prezime'],time() + 60*60,"/");
            setcookie('idKorisnika', $rez['id'],time() + 60*60,"/");
            setcookie('tip', $rez['idTip'],time() + 60*60,"/");
            $_SESSION['korisnik'] = time();
            return 2;
            }}
            else{
                return 3;
               
            }
        }
        else{
           return 4;
           
        }

    }

    function odjavise(){
        setcookie('ime','',time() + 60, '/');
        setcookie('prezime','',time() + 60, '/');
        setcookie('idKorisnika','',time() + 60, '/');
        setcookie('tip','',time() + 60*60,"/");
        header('Location: ../View/index.php');
        session_unset();     
        session_destroy();
    }

    function sveUsluge(){
        $dao = new DAOKORISNIK();
        $rez = $dao -> sveUsluge();
        return $rez;

    }
    function sveKase(){
        $dao = new DAOKORISNIK();
        $rez = $dao -> sveKase();
        return $rez;

    }
    function rezervacija(){
        $idkase =isset( $_POST['kasa'])?  $_POST['kasa']:'';
        $datum = isset( $_POST['datum'])?  $_POST['datum']:'';
        $vreme = isset( $_POST['vreme'])?  $_POST['vreme']:'';
        $usluga =isset( $_POST['usluga'])?  $_POST['usluga']:'';
        $idKorisnika = $_COOKIE['idKorisnika'];

     if($idkase != '' && $datum != '' && $vreme != '' && $usluga != ''){
            $dao = new DAOKORISNIK();
            $rez = $dao -> rezervacija($datum,$vreme,$usluga,$idKorisnika,$idkase);
            if($rez == true){
                $msg = "Uspesno ste rezervisali termin!";
                include "../View/index.php";
            }
        }else{
            $msg = "Nisu uneti svi potrebni podaci";
            include "../View/Rezervacija.php";
        }
        

    


        

    }

    function registracija(){
        $ime = isset($_GET['ime'])? $_GET['ime']:'' ;
        $prezime = isset($_GET['prezime'])? $_GET['prezime']:'' ;
        $email = isset($_GET['email'])? $_GET['email']:'' ;
        $lozinka = isset($_GET['lozinka'])? $_GET['lozinka']:'' ;
        $pomLozinka = isset($_GET['drlozinka'])? $_GET['drlozinka']:'' ;
        $imefirme = isset($_GET['imefirme'])? $_GET['imefirme']:'' ;
        $adresafirme = isset($_GET['adresafirme'])? $_GET['adresafirme']:'' ;
        $grad = isset($_GET['grad'])? $_GET['grad']:'' ;
        $admin = 2;

      
                 if($ime != '' && $lozinka != '' && $prezime != '' && $email != '' && $imefirme != ''&& $adresafirme != '' && $grad != '' && $pomLozinka != ''){
                    if($lozinka == $pomLozinka) {


            $dao = new DAOKORISNIK();
             $dao->registracija($ime,$prezime,$email,$lozinka,$imefirme,$adresafirme,$grad,$admin);
                 header('Location: ../View/login.php');
                }
                else{
                    $msg = "Lozinke nisu iste!";
                include "../View/registracija.php";
                }
            }
            else{
                $msg = "Nisu popunjena sva polja!";
                include "../View/registracija.php";
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

?>