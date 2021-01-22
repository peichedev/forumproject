<?php
  session_start();
  if(isset($_POST['username']) && isset($_POST['password']))
  {
    require('connexion.php');
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = sha1(htmlspecialchars($_POST['password']));  
    if($username !== "" && $password !== "")
    {
      $requete = $db->prepare ('SELECT count(*) FROM users where pseudo = ? and mdp = ? ');
      $requete->execute(array($username,$password));
      $count = $reponse['count(*)'];
      if($count!=0)
      {
       $_SESSION['username'] = $username;
       header('Location: ../index.php');
      }
      else
      {
        header('Location: login.php?erreur=1');
      }
    }
    else
    {
      header('Location: login.php?erreur=2');
    }
  }
  mysqli_close($db);
?>