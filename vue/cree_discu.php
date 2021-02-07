<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
</head>
	<body>
		<div id="container"> 
			<div class="formulaire_new_discu">
				<form action="../model/new_discu.php" method="post">
	    			<h2>Nouvelle discution</h2>
	    			<!-- list des discution disponible -->
					<p>titre : <input type="text" name="titre" /></p>
					<p>contenu  : <input type="text" name="contenu" /></p>
					<p>Veuillez choisir la catégorie du jeux : </p>
					<select type="text" name="categorie"></p>
	    				<option value="gta">GTA</option>
	    				<option value="Fornite">Fornite</option>
	    				<option value="Valorant">Valorant</option>
					</select>
					<?php
		 			if($_GET['log'] == 1)
					{ ?>
						<p><input type="submit" value="OK"></p>
						<a href='../index.php'>retour</a>
					<?php 
					} 
					else 
					{
						header('Location:../index.php');
					} ?>
				</form>	
			</div>
		</div>
	</body>
</html>