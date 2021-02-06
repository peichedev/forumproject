<?php 
if(isset($_GET['titre']))
{
	$titre=$_GET['titre'];
	require('../model/connexion.php');
	require('../model/discution.php');
}
else
{
	echo "Hummm je crois qu'il y a un probleme";
}

?>