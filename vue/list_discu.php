<?php 
if(isset($_GET['titre']))
{
	//affiche les discution
	$titre=$_GET['titre'];
	require('../model/connexion.php');
	require('../model/discution.php');
}
else
{
	echo "Hummm je crois qu'il y a un probleme";
}

?>