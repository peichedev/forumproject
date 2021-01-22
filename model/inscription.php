<?php
	$new_user=htmlspecialchars($_POST['pseudo']);
	$adress_mail=htmlspecialchars($_POST['mail']);
	$mdp=password_hash($_POST['mdp'],PASSWORD_DEFAULT);
	$email=htmlspecialchars($_POST['mail']);

	require('connexion.php');

	$sql= $db->prepare ('INSERT INTO users (pseudo, email , mdp)
	VALUES (?,?,?)');
  	$sql->execute(array($new_user,$email,$mdp));
  	$results = $sql->fetchAll();

	if (isset($results))
	{
	  header('Location: ../vue/login.php');	  
	} 
	else 
	{
	  echo "Erreur: " . $sql . "<br>" . $conn->error;
	}
?>
