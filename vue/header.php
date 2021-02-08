<!DOCTYPE html>
<html>
<head>
<?php $baseurl=$baseurl = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['REQUEST_URI'] . 'lol'); ?>
    <title>ForumPAD</title>
    <meta charset='utf-8'>
    <link href="<?php echo $baseurl; ?>/style/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <div id='totalmenu'>
            <nav id='navmenuuser'>
                <ul id='menuuser'>
                    <?php 
                    if(!empty($userinfo['avatar']))
                        {
                            ?> 
                            <img src="avatar/<?php echo $userinfo['avatar'] ?>"/>
                            <?php 
                        } 
                    else 
                    {
                    ?>
                        <a href=#> <img src="style/avatar.png" class='avatar' alt=""></a>
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
