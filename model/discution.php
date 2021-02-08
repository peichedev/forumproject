<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
</head>
	<body>
		<?php
		/// affiche le contenue
			$requete = $bdd->prepare ('SELECT categorie,contenu,date,titre,pseudo,discutions.id as id
				FROM discutions 
				INNER JOIN users ON discutions.id_user=users.id
				where categorie = ?');
			$requete->execute(array($titre));
			$resultes = $requete->fetchAll();
			require('userinfo.php');
			$pseudo=$userinfo['pseudo'];
			if(isset($resultes))
			{
				foreach ($resultes as $key => $value) 
				{
					?> <li id='bouttonmenu'><a href="../vue/msg.php?titre= <?php echo $value['id'] ?>">Voir message</a></li><?php
					echo "Crée part : ".$value['pseudo']." | ".'Contenu'.' : '.$value['contenu'].' | Date de mise en ligne : '.$value['date'].' | Titre : '.$value['titre'];
					if($value['pseudo']== $pseudo)	
					{
						if($value['categorie']==gta)
						{
							echo '<a style="padding-left:15px;" href="../model/delete_discu.php?nom=1&id='.$value['id'].'">delete</a><br><br><br>';

						}
						elseif ($value['categorie']==Fornite) 
						{
							echo '<a style="padding-left:15px;" href="../model/delete_discu.php?nom=2&id='.$value['id'].'">delete</a><br><br><br>';
						}
						elseif ($value['categorie']==Valorant) 
						{
							echo '<a style="padding-left:15px;" href="../model/delete_discu.php?nom=3&id='.$value['id'].'">delete</a><br><br><br>';
						}
					}
					else
					{
						echo '<br>'.'<br>';
					}	
				}
				
			}
			else
			{
				// aucun resultas dans la bdd
				echo "Aucun  resultas trouver pour $titre";
			}	
			?>
			<li id='bouttonmenu'><a href=../index.php>Retour</a></li>
	</body>
</html>