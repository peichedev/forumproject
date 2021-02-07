<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
</head>
	<body>
		<?php
		/// affiche le contenue
			$requete = $bdd->prepare ('SELECT contenu,date,titre
				FROM discutions 
				where categorie = ? ');
			$requete->execute(array($titre));
			$resultes = $requete->fetchAll();

			if(isset($resultes))
			{
				foreach ($resultes as $key => $value) 
				{
					echo 'Contenu'.' : '.$value['contenu'].' | Date de mise en ligne : '.$value['date'].' | Titre : '.$value['titre'].'<br>'.'<br>';	
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