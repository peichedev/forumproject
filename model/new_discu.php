<?php 
	$titre=htmlspecialchars($_POST['titre']);
	$contenu=htmlspecialchars($_POST['contenu']);
  $categorie=htmlspecialchars($_POST['categorie']);

	require('connexion.php');

	$sql= $bdd->prepare ('INSERT INTO discutions (titre,contenu,categorie) VALUES (?,?,?)');
  $sql->execute(array($titre, $contenu, $categorie));
  	if(isset($sql))
		{
			echo "votre discution a eter ajouter";
			header('Location: ../index.php');
		}
		else
		{
			echo "erreur";
			header('Location: cree_discu.php');
		}
 ?>