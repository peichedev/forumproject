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
				echo 'bonjour '.$_SESSION['pseudo'];?>
				<form action="../model/modif_compt.php" method="post">
			        <h2>Modifier votre mots de passe</h2>
					<p>Ancien mots de passe: <input type="password" name="mdp" /></p>
					<p>Nouveau mots de passe : <input type="password" name="new_mdp" /></p>
					<p>Confirmation du nouveau mots de passe: <input type="password" name="confirme_mdp" /></p><?php 
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
					?>
					<p><input type="submit" value="OK"></p>
				</form>
					<?php

			}
			else
			{
				header('Location: ../index.php');
			}
		?>
	</body>
</html>