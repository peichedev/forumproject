<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">          
		<form action="../model/inscription.php" method="post">
        <h2>Nouveau compte</h2>
			<p>pseudo : <input type="text" name="pseudo" /></p>
			<p>Mots de Passe : <input type="password" name="mdp" /></p>
			<p>email : <input type="text" name="mail" /></p>
			<p><input type="submit" value="OK"></p>
			<p><a href='login.php'>retour</a></p>
		</form>
        </div>
    </body>
</html>