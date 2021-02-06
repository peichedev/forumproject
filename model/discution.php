<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
</head>
	<body>
<?php
/// afiche le contenue
	$requete = $bdd->prepare ('SELECT contenu
		FROM discutions 
		where categorie = ? ');
	$requete->execute(array($titre));
	if(isset($requete))
	{
		foreach ($requete as $value) 
		{
			$discu = implode($value);
			echo "contenu : ",$discu;
			if(isset($discu))
			{
///affiche la date du contenue
				$requete2 = $bdd->prepare ('SELECT date
				FROM discutions 
				where categorie = ? ');
				$requete2->execute(array($titre));
				if(isset($requete2))
				{
					foreach ($requete2 as $value2) 
					{
						$discu2 = implode($value2);
						echo "<br>","date : ",$discu2;
						if(isset($discu))
						{
///affiche la catégorie du cotenue
							$requete3 = $bdd->prepare ('SELECT categorie
							FROM discutions 
							where categorie = ? ');
							$requete3->execute(array($titre));
							if(isset($requete3))
							{
								foreach ($requete3 as $value3) 
								{
									$discu3 = implode($value3);
									echo "<br>","categorie : ",$discu3;
								}
							}	
						}
					}
				}
			}
		}
	}
	else
	{
		echo "Aucun  resultas trouver pour $titre";
	}	
	?>
	<li id='bouttonmenu'><a href=../index.php>Retour</a></li>
	</body>
</html>