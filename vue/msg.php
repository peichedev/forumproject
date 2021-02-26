<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="../style/style.css" media="screen" type="text/css" />
		<!-- Load jQuery  -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <!-- Load WysiBB JS and Theme -->
        <script src="http://cdn.wysibb.com/js/jquery.wysibb.min.js"></script>
        <link rel="stylesheet" href="http://cdn.wysibb.com/css/default/wbbtheme.css" />

        <!-- Init WysiBB BBCode editor -->
        
        <script>
	        $(function() {
            var optionsWbb = {
	   	    buttons: "bold,italic,underline,fontcolor,|,img,link,color",
			   
	   	    lang: "fr",
	   	    allButtons: {
		        monbouton: {
		        title: 'Bouton Custom',
		        buttonText: 'MON BOUTON',
		        transform: { '<div class="maclasscustom">{SELTEXT}</div>':'[monbouton]{SELTEXT}[/monbouton]' }
		        }
		    }
		}
$("#editor").wysibb(optionsWbb);
})
</script>
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