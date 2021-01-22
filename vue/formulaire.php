<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../vue/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">          
		<form action="inscription.php" method="post">
        <h2>Nouveau compte</h2>
			<p>pseudo : <input type="text" name="pseudo" /></p>
			<p>Mots de Passe : <input type="text" name="mdp" /></p>
			<p>email : <input type="text" name="mail" /></p>
			<p><input type="submit" value="OK"></p>
			<p><a href='login.php'>retour</a></p>
		</form>
        </div>
    </body>
</html>