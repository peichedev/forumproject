<?php
$pseudo_ban = $_POST['ban'];
require('connexion.php');
require('userinfo.php');
//verifie si on est bien admin
if($userinfo['admin']==1)
{
	$sql= $bdd->prepare ('SELECT ban FROM users where pseudo =?');
  	$sql->execute(array($pseudo_ban));
  	$resultes = $sql->fetchAll();
  	foreach ($resultes as $key => $value) 
  	{
      //si user non ban le ban
  		if($value['ban']==0)
  		{
  			$sql1= $bdd->prepare ('UPDATE users SET ban=1 where pseudo = ?');
  			$sql1->execute(array($pseudo_ban));
  			$resultes1 = $sql1->fetchAll();
  			echo $pseudo_ban." a eter ban";
  		}
      //si user ban allor retir le ban
  		elseif($value['ban']==1)
  		{
  			$sql1= $bdd->prepare ('UPDATE users SET ban=0 where pseudo = ?');
  			$sql1->execute(array($pseudo_ban));
  			$resultes1 = $sql1->fetchAll();
  			echo $pseudo_ban." a fini sont ban";
  		}
  	}
}
else
{
	header('Location: ');
}
?>
