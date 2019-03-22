<?php

class Adresse 
{
	private $_nVoie = 0;
	private $_nomVoie = 0;
	private $_complementAdresse;
	private $_commune;
	private $_codePostal;
	private $_email;

	public function __construct($nVoie, $nomVoie, $complementAdresse, $commune, $codePostal, $email){
		$this->_nVoie = $nVoie;
	    $this->_nomVoie = $nomVoie;
	    $this->_complementAdresse = $complementAdresse;
	    $this->_commune = $commune;
	    $this->_codePostal = $codePostal;
	    $this->_email = $email;
	}

	public function setNvoie($nVoie){$this->_nVoie = $nVoie;}
	public function setNomVoie($nomVoie){$this->_nomVoie = $nomVoie;}
	public function setComplementAdresse($complementAdresse){$this->_complementAdresse = $complementAdresse;}
	public function setCommune($commune){$this->_commune = $commune;}
	public function setCodePostal($codePostal){$this->_codePostal = $codePostal;}
	public function setEmail($email){$this->_email = $email;}
 
    public function getNvoie(){return $this->_nVoie;}
	public function getNomVoie(){return $this->_nomVoie;}
	public function getComplementAdresse(){return $this->_complementAdresse;}
	public function getCommune(){return $this->_commune;}
	public function getCodePostal(){return $this->_codePostal;}
	public function getEmail(){return $this->_email;}







}