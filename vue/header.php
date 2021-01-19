<!DOCTYPE html>
<html>
<head>
	<title>ForumPAD</title>
	<meta charset='utf-8'>
    <link href="vue/FStyle.css" rel="stylesheet">

</head>
<body>
<header>
    <div id='totalmenu'>
        <nav id='navmenuuser'>
            <div>                   
            </div>
            <ul id='menuuser'>
                <li id='bouttonmenu'><a href=index.php?deconnexion=true>Déconnexion</a></li>
                <li src= 'login.php'id='bouttonmenu'><a href=model/login.php>login </a></li>
                <li><a href=#> <img src="img/avatar.png" class='avatar' alt=""></a></li>
                <li> <?php require ('model/redirection.php');?>                 
                </li>
            </ul>
        </nav>
    
        <nav id='navmenu'>
            <a href="index.php"><img id='imgforum' src='img/forum.jpg'></a>
            <ul id='navmenu'>
                <li>
                    <style>
                        #search {
                            border-radius: 30px;
                            border: 2px solid black;
                        }

                        #button {
                            background-color: aqua;
                            border: 0px solid black;
                            height: 30px;
                            border-radius: 30px;
                            cursor: pointer;
                        }
                    </style>
                    <input type="search" id="search" value="" onchange="ouvrirPage()">
                    <input type="button" id="button" onclick="ouvrirPage()" value="Chercher">
                    <script>
                        function ouvrirPage() {
                            var a = document.getElementById("search").value;

                            if (a === "le mot a marquer") {
                                window.open("l'id de la recherche");
                            }

                            if (a === "le mot a marquer") {
                                window.open("l'id de la recherche");
                            }

                            if (a === "le mot a marquer") {
                                window.open("l'id de la recherche");
                            }
                        }
                    </script></li>
            </ul>
        </nav>
    </div>
</header>
