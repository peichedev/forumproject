<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">  
            <div class="inscription_formulaire">        
                <form action="../model/inscription.php" method="post">
                    <!-- Formulaire des nouveaux utilisateurs -->
                    <h2>Nouveau compte</h2>
        			<p>pseudo : <input type="text" name="pseudo" /></p>
        			<p>Mots de Passe : <input type="password" name="mdp" /></p>
        			<p>email : <input type="email" name="mail" /></p>
        			<p><input type="submit" value="OK"></p>
        			<p><a href='login.php'>retour</a></p>
                </form>
            </div>
        </div>
    </body>
</html>