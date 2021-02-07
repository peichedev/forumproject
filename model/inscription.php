<?php
	$new_user=htmlspecialchars($_POST['pseudo']);
	$adress_mail=htmlspecialchars($_POST['mail']);
	$mdp=sha1(htmlspecialchars($_POST['mdp']));
	$email=htmlspecialchars($_POST['mail']);

	
	require('connexion.php');

	$sql= $bdd->prepare ('INSERT INTO users (pseudo, email , mdp) VALUES (?,?,?)');
  	$sql->execute(array($new_user,$email,$mdp));

	if ($sql)
	{
	  header('Location: ../vue/login.php');	  
	} 
	
?>
