<?php 
	$dsn ='mysql:host=localhost;dbname=forum';
	$db_username = 'root';
  $db_password = '';
  $db_name     = 'forum';
  //$db = new PDO($dsn, $db_username, $db_password) or die('could not connect to database');

  try {
    $bdd = new PDO($dsn,$db_username,$db_password);
  }
  catch(PDOException $e)
  {
    die('erreur : '.$e->getMessage());
  }
  
?>