<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
</head>
	<body>
<?php
	$requete = $bdd->prepare ('SELECT contenu,date,titre,categorie 
		FROM discutions 
		where categorie = ? ');
	$requete->execute(array($titre));
	if(isset($requete))
	{
		foreach ($requete as $value) 
		{
			$discu = implode(" | ", $value);
			echo $discu;
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