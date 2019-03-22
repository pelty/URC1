<!DOCTYPE html>
<?php require('Adherent.php'); ?>

<html>
<head>
	<title>Inscription URC</title>
</head>
<body>
	<form action="formulaire.php" method="POST">
		<label for="prenom"> Prenom: </label>
		    <input type="text" name="prenom" id="prenom"><br>

		<label for="nom"> Nom: </label> 
		    <input type="text" name="nom" id="nom"><br>

		<label for="email">email</label>
		    <input type="email" name="email" id="email"><br>
		<label for="date_na"> Date de naissance: </label>
		    <input type="date" name="date_na" placeholder="17/08/1994"><br>
		 

		<input type="submit" value="envoyer"><br>
	</form>

<?php 


/*
$prenom = htmlspecialchars($_POST['prenom']);
$prenom = htmlspecialchars($_POST['']);
$prenom = htmlspecialchars($_POST['']);
$prenom = htmlspecialchars($_POST['']);
*/

$inscrition = new Adherent();
$inscrition->ajout_adh($_POST['prenom'], $_POST['nom'], $_POST['email']); 
//$inscrition->getMembre();

?>

</body>
</html>