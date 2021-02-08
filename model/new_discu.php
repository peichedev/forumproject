<?php 
	require('userinfo.php');
	$id=$userinfo['id'];
	$titre=htmlspecialchars($_POST['titre']);
	$contenu=htmlspecialchars($_POST['contenu']);
  	$categorie=htmlspecialchars($_POST['categorie']);
	require('connexion.php');
//ajoute une discutions
	$sql= $bdd->prepare ('INSERT INTO discutions (titre,contenu,categorie,id_user) 
		VALUES (?,?,?,?)');
  $sql->execute(array($titre, $contenu, $categorie,$id));
  	if(isset($sql))
		{
//discution ajouter 
			header('Location: ../index.php');
		}
		else
		{
//erreur d'ajout de discutions
			header('Location: cree_discu.php');
		}
 ?>