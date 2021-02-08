<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
    </head>
    <body>
		<?php 
		ini_set('display_errors','off');/*cache erreur */
		$id = $_GET['titre'];
		require('../model/connexion.php');
		require('../model/userinfo.php');
		require('../model/msg.php');
		?>
	</body>
</html>