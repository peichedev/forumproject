<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body style='background:#fff;'>
        <div id="content">
            
            <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:header.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>          
        </div>
    </body>
</html>