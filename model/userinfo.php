<?php
// info sur l'user
session_start();
	require('connexion.php');
    $sql= $bdd->prepare ('SELECT * FROM users WHERE pseudo = ?');
    if(isset($_SESSION['pseudo']))
    {
    $sql->execute(array($_SESSION['pseudo']));
    $userinfo= $sql->fetch();
}
?>