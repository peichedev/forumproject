<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
    </head>
    <body>
		<?php
		session_start();
			$user=$_GET['enligne'];
			if($user == 1)
			{
				//formulaire de modif pour changer sont mdp
				echo 'bonjour '.$_SESSION['pseudo'];?>
				<form action="../model/modif_compt.php" method="post">
			        <h2>Modifier votre mots de passe</h2>
					<p>Ancien mots de passe: <input type="password" name="mdp" /></p>
					<p>Nouveau mots de passe : <input type="password" name="new_mdp" /></p>
					<p>Confirmation du nouveau mots de passe: <input type="password" name="confirme_mdp" /></p>
					<?php 
						$new=$_GET['err'];
						if($new==1)
						{
							echo "mots de passe changer";
						}
						elseif($new==2)
						{
							echo "mots de passe inconrrect";
						}
						elseif($new==3)
						{
							echo "le mots de passe est pas identique";
						}
						elseif($new==4)
						{
							echo "avatar changer";
						}
						else
						{
							echo "";
						}
					?>
					<p><input type="submit" value="OK"></p>
				</form>
				<!--  formulaire pour changer image de profil-->
				<form action="../model/modif_avatar.php" method="post" enctype="multipart/form-data">
					<label>Avatar :</label>
					<input type="file" name="Avatar">
					<p><input type="submit" value="OK"></p>
				</form>
				<?php
			}
			else
			{
				//si l'utilsateur essaye de venir en etant hors-ligne
				header('Location: ../index.php');
			}
		?>
	</body>
</html>