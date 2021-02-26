<?php 
//conexion a la bdd
    $dsn ='mysql:host=localhost;dbname=forum' ;
    $db_username = 'root';
  $db_password = 'root';
  $db_name = 'forum';

  try {
    $bdd = new PDO($dsn,$db_username,$db_password);
  }
  catch(PDOException $e)
  {
    die('erreur : '.$e->getMessage());
  }

?>