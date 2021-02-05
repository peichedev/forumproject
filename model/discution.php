<?php
	$titre=$_POST['recherche'];
	require('connexion.php');
	$requete = $bdd->prepare ('SELECT DISTINCT contenu,date,titre FROM discutions where titre = ?');
	$requete->execute(array($titre));
	$results = $requete->fetchAll();
	if(isset($results))
	{
		$_SESSION['results']=$results;
		header('Location: ../index.php');
	}
?>
