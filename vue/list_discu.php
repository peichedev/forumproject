<?php 
ini_set('display_errors','off');/*cache erreur username quand hors-ligne si vous etes chaud en php pour la reparer*/
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