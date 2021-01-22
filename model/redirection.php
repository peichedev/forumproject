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
          ?>
          <ul id='menuuer'>
            <li id='bouttonmenu'><a href=index.php?deconnexion=true>Déconnexion</a></li>
          </ul>
          <?php
            echo "<br>Bonjour $user vous etes en ligne";
        }
        else
        {
          ?>
          <ul id='menuuer'>
            <li src= 'login.php'id='bouttonmenu'><a href=model/login.php>login </a></li>
          </ul>
          <?php
            echo "Bonjour, vous etes hors-ligne";

        }
    }
?>    