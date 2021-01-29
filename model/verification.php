<?php
  
  session_start();
  if(isset($_POST['username']) && isset($_POST['password']))
  {
    require('connexion.php');
    $username = htmlspecialchars($_POST['username']); 
    $password = sha1(htmlspecialchars($_POST['password']));  
    if($username !== "" && $password !== "")
    {
      $requete = $bdd->prepare ('SELECT count(*) FROM users where pseudo = ? and mdp = ? ');
      $requete->execute(array($username ,$password));
      $results = $requete->fetchAll();
      if($results!=0)
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