<?php 
require_once('Manager.php');
// commentaire TEST

class Adherent extends Personn









/**
 * Model pour connection a la base de donner
 */
class Adherent1 extends Manager
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

}