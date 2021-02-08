<?php
$id_msg=$_GET['id'];
require('connexion.php');
require('connexion.php');
            $reponse = $bdd->prepare('
            	DELETE from message WHERE id= ?');
            $reponse->execute(array($id_msg));
            $resultes = $reponse->fetchAll();
            if(isset($resultes))
            {
            	echo "message supprimer";
            	echo '<a style="padding-left:15px;" href="../vue/msg.php?titre='.$_GET['titre'].'&&cat='.$_GET['cat'].'">retour</a>';
            }
            else
            {
            	echo "erreur";
            }
?>