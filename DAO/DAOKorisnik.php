<?php
require_once '../config/db.php';

class DAOKORISNIK {
	private $db;

	// za 2. nacin resenja
	private $REGISTRACIJA = "INSERT INTO korisnik (ime, prezime, email, lozinka, imefirme, adresafirme, grad, idTip) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	private $REZERVACIJA = "INSERT INTO rezervacija (`datum`, `vreme`, `idUsluge`, `idKorisnika`, `idKase`) VALUES (?,?,?,?,?)";
	private $DELETEOSOBA = "DELETE  FROM osoba WHERE idosoba = ?";
	private $LOGIN = "SELECT * FROM korisnik WHERE email =? AND lozinka= ?";	
	private $SVEUSLUGE = "SELECT * FROM usluga";
	private $SVEKASE = "SELECT * FROM kasa";
	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function getLastNOsoba($n)
	{
		
		$statement = $this->db->prepare($this->GETLASTNOSOBA);
		$statement->bindValue(1, $n, PDO::PARAM_INT);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

	public function Registracija($ime,$prezime,$email,$lozinka,$imefirme,$adresafirme,$grad,$admin)
	{
	
		$statement = $this->db->prepare($this->REGISTRACIJA);
		$statement->bindValue(1, $ime);
		$statement->bindValue(2, $prezime);
		$statement->bindValue(3, $email);
		$statement->bindValue(4, $lozinka);
		$statement->bindValue(5, $imefirme);
		$statement->bindValue(6, $adresafirme);
		$statement->bindValue(7, $grad);
		$statement->bindValue(8, $admin);
		
		$statement->execute();
		
	}
	public function rezervacija($datum,$vreme,$usluga,$korisnik,$kasa)
	{
	
		$statement = $this->db->prepare($this->REZERVACIJA);
		$statement->bindValue(1, $datum);
		$statement->bindValue(2, $vreme);
		$statement->bindValue(3, $usluga);
		$statement->bindValue(4, $korisnik);
		$statement->bindValue(5, $kasa);
		
		
		$statement->execute();
		return true;
	}

	public function deleteOsoba($idosoba)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("DELETE  FROM osoba WHERE idosoba = :idosoba");
		$statement->execute(array(':idosoba' => $idosoba));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->DELETEOSOBA);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
	}

	public function login($email, $lozinka)
	{
		$statement = $this->db->prepare($this->LOGIN);
		$statement->bindValue(1,$email);
		$statement->bindValue(2,$lozinka);
		
		$statement->execute();
		
		$result = $statement->fetch();
		return $result;
	}
	public function sveUsluge()
	{
		$statement = $this->db->prepare($this->SVEUSLUGE);
		
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
	public function sveKase()
	{
		$statement = $this->db->prepare($this->SVEKASE);
		
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
}
?>
