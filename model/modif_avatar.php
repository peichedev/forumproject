<?php
session_start();
require("connexion.php");
//ajute une image sur sql est fichier avatar
	if(isset($_FILES['Avatar']) AND !empty($_FILES['Avatar']['name']))
	{
		$taille_max = 2097152;
		$extension_valide =array('jpg','jpeg','gif','png');
		if($_FILES['Avatar']['size'] <= $taille_max)
		{
			$ectension_upload = strtolower(substr(strrchr($_FILES['Avatar']['name'], '.'), 1));
			if(in_array($ectension_upload, $extension_valide))
			{
				$chemin = "../avatar/".$_SESSION['pseudo'].'.'.$ectension_upload;
				$resultats = move_uploaded_file($_FILES['Avatar']['tmp_name'],$chemin);
				if($resultats)
				{
					$update_avatar = $bdd->prepare('UPDATE users SET avatar = :avatar WHERE pseudo = :id');
					$update_avatar->execute(array(
						'avatar' => $_SESSION['pseudo'].'.'.$ectension_upload,
						'id' => $_SESSION['pseudo']));
					header('Location: ../vue/modif_profil.php?enligne=1&err=4');
				}
				else
				{
					echo "une erreur inatendue";
				}
			}
			else
			{
				echo "pas bon format";
			}
		}
		else
		{
			echo "erreur";
		}
	}
?>