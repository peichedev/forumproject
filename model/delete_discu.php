<?php 
$page= $_GET['nom']  ;
$id_discu = $_GET['id'];
	require('userinfo.php');
	$id=$userinfo['id'];
        if(isset($_SESSION['pseudo']))
        {
        	require('connexion.php');
            $reponse = $bdd->prepare('
            	DELETE from discutions WHERE id_user = ? AND id=?');
            $reponse->execute(array($id,$id_discu));
            $resultes = $reponse->fetchAll();
            	if(isset($resultes))
            	{
            		if($page ==1)
            		{
            			header('Location: ../vue/list_discu.php?titre=gta');
            		}
            		elseif ($page ==2) 
            		{
            			header('Location: ../vue/list_discu.php?titre=Fornite');
            		}
	         		elseif ($page ==3) 
            		{
            			header('Location: ../vue/list_discu.php?titre=valorant');
            		}
           	 	}
        }
?>