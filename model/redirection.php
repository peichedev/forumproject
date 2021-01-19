<?php
    ini_set('display_errors','off');/*cache erreur username quand hors-ligne si vous etes chaud en php pour la reparer*/
    session_start();
    if(isset($_GET['deconnexion']))
    { 
       if($_GET['deconnexion']==true)
       {  
          session_unset();
          header("location:index.php");
       }
    }
    else if($_SESSION['username'] !== "")   
    {
        $user = $_SESSION['username'];
        if(isset($user))
        {
            echo "<br>Bonjour $user vous etes en ligne";
        }
        else
        {
            echo "Bonjour, vous etes hors-ligne";
        }
    }
?>    