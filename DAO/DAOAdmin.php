<?php
require_once '../config/db.php';

class DAOADMIN {
	private $db;

	// za 2. nacin resenja
	private $ADMINISTRATOR = "INSERT INTO korisnik (ime, prezime, email, lozinka, imefirme, adresafirme, grad, idTip) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	private $INSERTUSLUGA = "INSERT INTO usluga (naziv, cena) VALUES (?, ?)";
	private $UPDATEUSLUGA = "UPDATE usluga set naziv =?, cena=? where id=?";

	private $INSERTKASA = "INSERT INTO KASA (naziv, tip) VALUES (?, ?)";
	private $UPDATEKASA = "UPDATE KASA set naziv =?, tip=? where id=?";
	private $OBRISIKASU = "DELETE FROM KASA WHERE id=?";

	private $USLUGE = "SELECT * FROM USLUGA";
	private $KASE = "SELECT * FROM KASA";
	private $KORISNICI = "SELECT * FROM Korisnik order by idTip asc";
	private $OBRISIUSLUGU = "DELETE FROM USLUGA WHERE id=?";
	private $DATUM = "SELECT r.datum, r.vreme, k.ime, k.prezime, k.imeFirme, u.naziv FROM rezervacija r join usluga u on r.idUsluge=u.id join korisnik k on k.id=r.idKorisnika join kasa ka on ka.id=r.idKase where r.datum = ? order by datum asc";	
	private $DATUMFIRMA = "SELECT r.datum, r.vreme, k.ime, k.prezime, k.imeFirme, u.naziv FROM rezervacija r join usluga u on r.idUsluge=u.id join korisnik k on k.id=r.idKorisnika join kasa ka on ka.id=r.idKase where r.datum = ? and k.imeFirme = ?";	
	private $FIRMA = "SELECT r.datum, r.vreme, k.ime, k.prezime, k.imeFirme, u.naziv FROM rezervacija r join usluga u on r.idUsluge=u.id join korisnik k on k.id=r.idKorisnika join kasa ka on ka.id=r.idKase where k.imeFirme = ? order by datum asc";
	private $SVE = "SELECT r.datum, r.vreme, k.ime, k.prezime, k.imeFirme, u.naziv FROM rezervacija r join usluga u on r.idUsluge=u.id join korisnik k on r.idKorisnika=k.id where datum>CURDATE() order by datum asc";
	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}


	public function GetDatum($datum)
	{
		
		$statement = $this->db->prepare($this->DATUM);
		$statement->bindValue(1, $datum);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

	public function GetFirma($firma)
	{
		
		$statement = $this->db->prepare($this->FIRMA);
		$statement->bindValue(1, $firma);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

	
	public function GetDatumFirma($datum,$firma)
	{
		
		$statement = $this->db->prepare($this->DATUMFIRMA);
		$statement->bindValue(1, $datum);
		$statement->bindValue(2, $firma);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}




	public function dodajUslugu($naziv,$cena)
	{
		
		$statement = $this->db->prepare($this->INSERTUSLUGA);
		$statement->bindValue(1, $naziv);
		$statement->bindValue(2, $cena);
		
		$statement->execute();
		
	
	}
	public function obrisiUslugu($id)
	{
		
		$statement = $this->db->prepare($this->OBRISIUSLUGU);
		$statement->bindValue(1, $id);
	
		
		$statement->execute();
		
	
	}
	public function izmeniUslugu($naziv,$cena,$id)
	{
		
		$statement = $this->db->prepare($this->UPDATEUSLUGA);
		$statement->bindValue(1, $naziv);
		$statement->bindValue(2, $cena);
		$statement->bindValue(3, $id);

		
		$statement->execute();
		
	
	}





	public function dodajKasu($naziv,$cena)
	{
		
		$statement = $this->db->prepare($this->INSERTKASA);
		$statement->bindValue(1, $naziv);
		$statement->bindValue(2, $cena);
		
		$statement->execute();
		
	
	}
	public function ObrisiKasu($id)
	{
		
		$statement = $this->db->prepare($this->OBRISIKASU);
		$statement->bindValue(1, $id);
	
		
		$statement->execute();
		
	
	}
	public function izmeniKasu($naziv,$cena,$id)
	{
		
		$statement = $this->db->prepare($this->UPDATEKASA);
		$statement->bindValue(1, $naziv);
		$statement->bindValue(2, $cena);
		$statement->bindValue(3, $id);

		
		$statement->execute();
		
	
	}





	public function Get()
	{
		
		$statement = $this->db->prepare($this->SVE);
		
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}




	public function administrator($ime,$prezime,$email,$lozinka,$imefirme,$adresafirme,$grad,$admin)
	{
	
		$statement = $this->db->prepare($this->ADMINISTRATOR);
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
	public function SviKorisnici()
	{
		
		$statement = $this->db->prepare($this->KORISNICI);
		
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

	public function Usluge()
	{
		
		$statement = $this->db->prepare($this->USLUGE);
		
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
	public function Kase()
	{
		
		$statement = $this->db->prepare($this->KASE);
		
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
}
?>
