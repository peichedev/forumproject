<?php 
$id = $_GET['titre'];
require('../model/connexion.php');
if(isset($id))
{
	$reponse = $bdd->prepare('
		SELECT messages,pseudo FROM discutions
		INNER join users on discutions.id_user = users.id
		INNER JOIN message on discutions.id = message.id_discution
		where message.id_discution = ?');
	            $reponse->execute(array($id));
	            $resultes = $reponse->fetchAll();
		            foreach ($resultes as $key => $value) 
		            {
		            	echo 'message'." : ".$value["messages"].' | ecrit part : '.$value['pseudo'];
		            }

}
 ?>