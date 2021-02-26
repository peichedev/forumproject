<!DOCTYPE html>
<html>
<head>
<?php $baseurl=$baseurl = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['REQUEST_URI'] . 'lol'); ?>
    <title>ForumPAD</title>
    <meta charset='utf-8'>
    <link href="<?php echo $baseurl; ?>/style/style.css" rel="stylesheet">
    
        <!-- Load jQuery  -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <!-- Load WysiBB JS and Theme -->
        <script src="http://cdn.wysibb.com/js/jquery.wysibb.min.js"></script>
        <link rel="stylesheet" href="http://cdn.wysibb.com/css/default/wbbtheme.css" />
        <!-- Init WysiBB BBCode editor -->
        
        <script>
	        $(function() {
            var optionsWbb = {
	   	    buttons: "bold,italic,underline,|,justifycenter,|,img,link,|,code,quote,monbouton",
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
    <header>
        <div id='totalmenu'>
            <nav id='navmenuuser'>
                <ul id='menuuser'>
                    <?php 
                    require('model/userinfo.php');
                    if(isset($userinfo['avatar']))
                        {
                            ?> 
                            <img id='t'src="avatar/<?php echo $userinfo['avatar'] ?>"/>
                            <?php 
                        } 
                    else 
                    {
                    ?>
                        <a href=#> <img id='t' src="style/avatar.png" class='avatar' alt=""></a>
                    <?php 
                    }
                    require ('model/redirection.php');
                    ?> 
                </ul>
            </nav>
            <nav id='navmenu'>
                <a href="index.php"><img id='imgforum' src='style/forum.jpg'></a>
                <ul id='navmenu'> 
                    <li id="recherche"></li>
                </ul>
            </nav>            
        </div>
    </header>
</body>
