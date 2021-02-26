<?php
ini_set('display_errors','off');/*cache erreur */
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