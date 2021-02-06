<?php
session_start();
$user_mdp=sha1(htmlspecialchars($_POST['mdp']));
$new_mdp=htmlspecialchars($_POST['new_mdp']);
$confirme_mdp=htmlspecialchars($_POST['confirme_mdp']);
$username2=$_SESSION['pseudo'];
	if($new_mdp == $confirme_mdp)
	{
		require("connexion.php");
		$requete = $bdd->prepare ('SELECT * FROM users where pseudo = ? and mdp = ? ');
	    $requete->execute(array($username2 ,$user_mdp));
	   	$result=$requete->rowCount();
	    if($result!=0)
	      	{
	      		$requete2 = $bdd->prepare ('UPDATE mdps FROM users where mdp = ? ');
	    		$requete2->execute(array($new_mdp));
	    		if(isset($requete2))
	    		{
	    			header('Location: ../vue/modif_profil.php?enligne=1&err=1');
	    		}
	      	}
	      	else
	      	{
	      		header('Location: ../vue/modif_profil.php?enligne=1&err=2');
	      	}
	}
	else
	{
		header('Location: ../vue/modif_profil.php?enligne=1&err=3');
	}
?>