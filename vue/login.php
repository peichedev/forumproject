<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container"> 
            <div class="login_formulaire">          
                <form action="../model/verification.php" method="POST">
                    <!-- info pour ce log -->
                    <h1>Connexion</h1>
                    
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" id="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" id="username" required>

                    <input type="submit" id='submit' value='Entrer' >
                    <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                        {
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                        //si user est ban
                        elseif($err==3)
                        {
                             echo "<p style='color:red'>Vous etes ban</p>";
                        }
                    }
                    ?>
                    <a href='formulaire.php'>cree un compte</a>
                    <br><!--crée formulaire -->
                    <a href='../index.php'>retour</a>
                </form>
            </div>
        </div>
    </body>
</html>