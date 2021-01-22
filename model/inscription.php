<?php
	$new_user=$_POST['pseudo'];
	$adress_mail=$_POST['mail'];
	$mdp=$_POST['mdp'];

	require('connexion.php');
	$sql = "INSERT INTO users (id,pseudo, email , mdp)
	VALUES (null,".$new_user",".$adress_mail",".$mdp")";

	if ($conn->query($sql) === TRUE) 
	{
	  echo "bienvenue";
	} 
	else 
	{
	  echo "Erreur: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
