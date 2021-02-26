<?php
$id_discu=$_GET['id'];
$msg = $_POST['msg'];
require('connexion.php');
require('userinfo.php');
if(isset($userinfo['id']))
{
	 $reponse = $bdd->prepare('INSERT INTO message(messages,message.id_discution,id_user) 
	 	VALUES (?,?,?)');
            $reponse->execute(array($msg,$id_discu,$userinfo['id']));
          
            if($reponse)
            {
            	echo "message ajouter avec succes".'<br>';
            	echo '<a style="padding-left:15px;" href="../vue/msg.php?cat='.$_GET['cat'].'&&titre='.$id_discu.'">retour</a>';

            }
            else
            {
            	echo "Une erreur c'est produit";
            }
}
else
{
	header('Location: ../index.php');
}
?>