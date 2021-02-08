<?php 
  session_start();
  if(isset($_POST['username']) && isset($_POST['password']))
  {
    require('connexion.php');
    $username = htmlspecialchars($_POST['username']); 
    $password = sha1(htmlspecialchars($_POST['password']));  
    if($username !== "" && $password !== "")
    {
      //verifie si l'ulisateur peux ce connecter
      $requete = $bdd->prepare ('SELECT * FROM users where pseudo = ? and mdp = ? ');
     	$requete->execute(array($username ,$password));
    	$result=$requete->rowCount();
      $resultes = $requete->fetchAll();
    	if($result!=0)
      	{
          foreach ($resultes as $key => $value) 
          {
            if($value['ban']==0)
            {
              $_SESSION['username'] = $username;
             header('Location: ../index.php');
            }
            else
            {
              header('Location: ../vue/login.php?erreur=3');
            }
          }
      	}
      	else
      	{
          // l'utilisateur c est trompe de mdp
        	header('Location: ../vue/login.php?erreur=1');
      	}
    }
    else
      //l'ulisateur a pas remplie un des champs
    {
      header('Location: ../vue/login.php?erreur=2');
    }
  }
?>