<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
</head>
	<body>
		<div class="container_discu">
			<div class="en_tete">
				<h2>Sujet de discussion</h2>
			</div>
			<?php
			/// affiche le contenue
				$requete = $bdd->prepare ('SELECT clore,categorie,contenu,date,titre,pseudo,discutions.id as id
					FROM discutions 
					INNER JOIN users ON discutions.id_user=users.id
					where categorie = ?');
				$requete->execute(array($titre));
				$resultes = $requete->fetchAll();
				require('userinfo.php');
				$pseudo=$userinfo['pseudo'];
				if(isset($resultes))
				{
					foreach ($resultes as $key => $value) 
					{
						?> <li id='bouttonmenu'><a href="../vue/msg.php?clore=<?php echo $value['clore']?>&&cat=<?php echo $titre?>&&titre= <?php echo $value['id'] ?>">Voir message</a></li><?php
						if($value['clore']==0)
							{
								echo "discution ouverte | ";
							}
						elseif($value['clore']==1) 
							{
								echo "discution fermer | ";
							}
						echo "Crée part : ".$value['pseudo']." | ".'Contenu'.' : '.$value['contenu'].' | Date de mise en ligne : '.$value['date'].' | Titre : '.$value['titre'];
						if($value['pseudo']== $pseudo||$userinfo['admin']==1)	
						{
							if($value['categorie']==gta)
							{
								echo '<a style="padding-left:15px;" href="../model/delete_discu.php?nom=1&id='.$value['id'].'">delete</a>';
								if($userinfo['admin']==1)
								{
									echo '<a style="padding-left:15px;" href="../model/clore.php?titre='.$_GET['titre'].'&&clore='.$value['clore'].'&&nom=1&id='.$value['id'].'">clore/re-ouvrire</a><br><br><br>';
								}
								else
								{
									echo "<br><br><br>";
								}

							}
							elseif ($value['categorie']==Fornite) 
							{
								echo '<a style="padding-left:15px;" href="../model/delete_discu.php?nom=2&id='.$value['id'].'">delete</a>';
								if($userinfo['admin']==1)
								{
									echo '<a style="padding-left:15px;" href="../model/clore.php?titre='.$_GET['titre'].'&&clore='.$value['clore'].'&&nom=1&id='.$value['id'].'">clore/re-ouvrire</a><br><br><br>';
								}
								else
								{
									echo "<br><br><br>";
								}
							}
							elseif ($value['categorie']==Valorant) 
							{
								echo '<a style="padding-left:15px;" href="../model/delete_discu.php?nom=3&id='.$value['id'].'">delete</a>';
								if($userinfo['admin']==1)
								{
									echo '<a style="padding-left:15px;" href="../model/clore.php?titre='.$_GET['titre'].'&&clore='.$value['clore'].'&&nom=1&id='.$value['id'].'">clore/re-ouvrire</a><br><br><br>';
								}
								else
								{
									echo "<br><br><br>";
								}
							}
						}
						else
						{
							echo '<br>'.'<br>';
						}	
					}
					
				}
				else
				{
					// aucun resultas dans la bdd
					echo "Aucun  resultas trouver pour $titre";
				}	
				?>
				<div class="buttonretour">
					<li id='bouttonmenu'><a href=../index.php?titre=>Retour</a></li>
				</div>
		</div>
	</body>
</html>