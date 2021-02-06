<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
</head>
	<body>
		<form action="../model/new_discu.php" method="post">
        <h2>Nouvelle discution</h2>
			<p>titre : <input type="text" name="titre" /></p>
			<p>contenu  : <input type="text" name="contenu" /></p>
			<p>Veuillez choisir la catégorie du jeux : <select type="text" name="categorie"></p>
    				<option value="gta">GTA</option>
    				<option value="Fornite">Fornite</option>
    				<option value="Valorant">Valorant</option>
				</select>
				<?php
			 	if($_GET['log'] == 1)
				{ ?>
					<p><input type="submit" value="OK"></p>
				<?php 
				} 
				else 
				{
					echo '<br>'.'<br>'."Veuillez vous connecter pour cree une discution";
				} ?>
		</form>
	</body>
</html>