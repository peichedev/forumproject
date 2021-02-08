<?php
require('userinfo.php');
    ini_set('display_errors','off');/*cache erreur username quand hors-ligne si vous etes chaud en php pour la reparer*/
    session_start();
    
    if(isset($_GET['deconnexion']))
    { 
       if($_GET['deconnexion']==true)
       {  
          session_destroy();
          header("location:index.php");
       }
    }
    else if($_SESSION['username'] !== "")   
    {
        $user = $_SESSION['username'];
        $_SESSION['pseudo']=$user;
        if(isset($user))
        {
          // si en ligne affiche les boutons
          ?>
          <ul id='menuuer'>
            
            <li id='bouttonmenu'><a href=vue/modif_profil.php?enligne=1&err=0>Mon profil</a></li>
            <li id='bouttonmenu'><a href=index.php?deconnexion=true>Déconnexion</a></li>
          </ul>
          <?php 
            echo "<br>Bonjour $user vous etes en ligne";
            if($userinfo['admin']!=0)
            {
              echo '<br>'."Vous etes un admin";
              echo '<a style="padding-left:15px;" href="../vue/msg.php?cat='.$_GET['cat'].'&&titre='.$id_discu.'">BAN un users</a>';
            }
        }
        else
        {
          //si hors ligne affiche c'est boutions
          ?>
          <ul id='menuuer'>
            <li src= 'login.php'id='bouttonmenu'><a href=vue/login.php>login </a></li>
          </ul>
          <?php
            echo "Bonjour, vous etes hors-ligne";

        }
    }
?>    