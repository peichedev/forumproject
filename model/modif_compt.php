<?php
require("connexion.php");
session_start();
$user_mdp=sha1(htmlspecialchars($_POST['mdp']));
$new_mdp=sha1(htmlspecialchars($_POST['new_mdp']));
$confirme_mdp=sha1(htmlspecialchars($_POST['confirme_mdp']));
$username=$_SESSION['pseudo'];
	if($new_mdp == $confirme_mdp)
	{
		$requete = $bdd->prepare ('SELECT * FROM users where pseudo = ? and mdp = ? ');
	    $requete->execute(array($username ,$user_mdp));
	   	$result=$requete->rowCount();
	    if($result!=0)
	      	{
	      		$requete2 = $bdd->prepare ('UPDATE users SET mdp = ? WHERE pseudo = ?');
	    		$requete2->execute(array($new_mdp,$username));
	    		if(isset($requete2))
	    		{
	    			//mots de passe changer
	    			header('Location: ../vue/modif_profil.php?enligne=1&err=1');
	    		}
	      	}
	      	else
	      	{
	      		// mots de passe incorrecte de l'utilsateur
	      		header('Location: ../vue/modif_profil.php?enligne=1&err=2');
	      	}
	}
	else
	{
		// mots de passe non identique
		header('Location: ../vue/modif_profil.php?enligne=1&err=3');
	}
?>