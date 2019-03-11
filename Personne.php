<?php

abstract class Personne 
{
	private $_nom;
	private $_prenom;
	private $_genre;
	private $_dateNaissance;
	private $_nationaliter;
	private $_tel;

	public function __construct($genre,$nom,$prenom,$dateNaissance,$nationaliter,$tel){
		$this->_genre = $genre;
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_dateNaissance = $dateNaissance;
		$this->_nationaliter = $nationaliter;
		$this->_tel = $tel;
	}

	public function __toString(){
		// creer une fonction date pour ajt l'age
		return $this->_genre." ".
		       $this->_nom." ".
		       $this->_prenom." nationalite: ".
		       $this->_nationaliter." ".
		       $this->_tel;
		       
	}

	public function setNom($nom){$this->_nom = $nom;}
	public function setPrenom($prenom){$this->_prenom = $prenom;}
	public function setGenre($genre){$this->_genre = $genre;}
	public function setDateNaissance($dateNaissance){$this->_dateNaissance = $dateNaissance;}
	public function setNationaliter($nationaliter){$this->_nationaliter = $nationaliter;}
	public function setTel($tel){$this->_tel = $tel;}
 
    public function getNom(){return $this->_nom;}
	public function getPrenom(){return $this->_prenom;}
	public function getGenre(){return $this->_genre;}
	public function getDateNaissance($dateNaissance){return $this->_dateNaissance;}
	public function getNationaliter($nationaliter){return $this->_nationaliter;}
	public function getTel(){return $this->_tel;}







}