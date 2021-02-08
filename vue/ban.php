<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
             <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
        <title></title>
    </head>
    <body>
        <div id="container"> 
            <div class="ban_formulaire"> 
            <!-- demende le pseudo a ban ou de de-ban -->       
                <form action="../model/ban.php" method="post">
                    <h2>BAN</h2>
                    <p>pseudo de l'utilsateur a ban ou rappeler un users ban: <input type="text" name="ban" /></p>
                    <p><input type="submit" value="OK"></p>
                    <p><a href='../index.php'>retour</a></p>
                </form>
            </div>
        </div>
    </body>
</html>