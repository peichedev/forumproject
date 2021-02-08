<?php
$id=$_GET['id'];
if($_GET['clore']==0)
{
	//permet de clore une discu
	require("connexion.php");
	$requete = $bdd->prepare ('UPDATE discutions SET clore=1 where id = ?');
			$requete->execute(array($id));
			$resultes = $requete->fetchAll();
			header('Location: ../vue/list_discu.php?titre='.$_GET['titre'].'');
}
elseif($_GET['clore']==1)
	//ouvre une discution clore
{
		require("connexion.php");
	$requete = $bdd->prepare ('UPDATE discutions SET clore=0 where id = ?');
			$requete->execute(array($id));
			$resultes = $requete->fetchAll();
			header('Location: ../vue/list_discu.php?titre='.$_GET['titre'].'');
}
?>