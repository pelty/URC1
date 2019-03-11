<?php 
require_once('Manager.php');


/**
 * 
 */
class Adherent extends Manager
{

	public function ajout_adh($prenom, $nom, $email)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO adherents (prenom, nom, email) VALUES(?, ?, ?)');
		$req->execute(array($prenom, $nom, $email));
		
	}

	public function getMembre()
	{
		$db = $this->dbConnect();
		$recherche = $db->query('SELECT prenom, nom, age, tel, email FROM urc');
		return $recherche; 

	}



	/* Exécute une requête préparée en associant des variables PHP 
$calories = 150;
$couleur = 'rouge';
$sth = $dbh->prepare('SELECT nom, couleur, calories
    FROM fruit
    WHERE calories < ? AND couleur = ?');
$sth->bindValue(1, $calories, PDO::PARAM_INT);
$sth->bindValue(2, $couleur, PDO::PARAM_STR);
$sth->execute(); 



$req->bindValue(1, $prenom, PDO::PARAM_STR);
		$req->bindValue(2, $nom, PDO::PARAM_STR);
		/*$req->bindValue(3, $age, PDO::PARAM_INT);
		$req->bindValue(3, $tel, PDO::PARAM_INT);
		$req->bindValue(4, $email, PDO::PARAM_STR); */



}