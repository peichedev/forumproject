<?php
	$titre=$_GET['a'];
	require('connexion.php');
	$requete = $db->prepare ('SELECT count(*) FROM discution where titre = ?');
	$requete->execute(array($titre));
  	$results = $requete->fetchAll();
	$_GET['results']
?>