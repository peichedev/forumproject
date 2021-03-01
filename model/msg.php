<?php		
	if(isset($id))
	{
		//affiche les discutions
		$reponse = $bdd->prepare('
			SELECT admin,clore,message.id_user,message.id as id_msg,messages,pseudo,message.id_discution,users.id as id
			FROM discutions
			INNER join users on discutions.id_user = users.id
			INNER JOIN message on discutions.id = message.id_discution
			where message.id_discution = ?');
	    $reponse->execute(array($id));
	    $resultes = $reponse->fetchAll();
	    if(isset($resultes))
	    	{
	    		$reponse1 = $bdd->prepare('
				SELECT clore
				FROM discutions
				where id = ?');
		    $reponse1->execute(array($id));
		    $resultes1 = $reponse1->fetchAll();
		    $test = true;
		    		foreach ($resultes1 as $key => $value1) 
	    		{
		    		if($userinfo['id']!=0 && $value1['clore']==0&&$test)
					{	
						$test=false;
			    		 ?>		 		
				    	<div id="container">  
				            <div class="new_msg"> 
				            	 <form action="../model/ajout_msg.php?cat=<?php echo $_GET['cat'] ?>&&id= <?php echo $id ?>" method="post">
				                    <!-- Formulaire new msg -->
				                    <h2>Nouveau message</h2>
				        			<p>Contenu de votre message : <textarea id="editor" name="msg" rows="7" cols="50"></textarea></p>
				        			<p><input type="submit" value="OK"></p>
				        			<p><a href='list_discu.php?titre=<?php echo $_GET['cat']?>'>retour</a></p>
				                </form>
				            </div>
				        </div> <?php 
		    		}
		    		else
		    		{
		    		}
	   	 		}
	    	}
	    	
			require_once "../lib/JBBCode/Parser.php";
						
			$parser = new JBBCode\Parser();
			$parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
					
	    foreach ($resultes as $key => $value) 
	    {
			$parser->parse($value["messages"]);
	    	echo 'message'." : ". $parser->getAsHtml();/*.' | ecrit part : '.$value['pseudo']*/;
	    	if($value['id_user']==$userinfo['id']||$userinfo['admin'] !=0)
	    	{
	    		if($value['clore']==0 || $userinfo['admin']==1)
	    		{
	    		echo '<a style="padding-left:15px;" href="../model/delete_msg.php?titre='.$_GET['titre'].'&&cat='.$_GET['cat'].'&&id='.$value['id_msg'].'">delete</a><br>';
	    		}
	    		else
	    		{
	    			echo "<br>";
	    		}
	    	}	
	    	else
	    	{
	    		echo "<br>";
	    
	    	}	
		}	    
	}	
?>