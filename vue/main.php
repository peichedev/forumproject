<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <main>
            <div class="main">
                <button class="button_categorie">
                    <?php if(isset($user)) { ?>
                        <!-- pour crée une discu si on est en ligne -->
                    <a href="vue/cree_discu.php?log=1">nouvelle discution</a> <?php }
                    else
                    { ?>
                        <p> Connecter vous pour cree une nouvelle discu</p>
                    <?php } ?>  

                </button>
            </div>
            &nbsp;
            <br>
            &nbsp;
            <div class="article">
                <!-- list des catégories-->
                <div class="premier_article">
                    <div class="nom_article">
                        <h2>1ère article : Grand Theft Auto</h2>
                    </div>
                    <div class="description_article">
                        <p>Description : Il s'agit du célèbre jeu créé par rocktars. Sorti le 17 septembre 2013 </p>
                        <li id='bouttonmenu'><a href=vue/list_discu.php?titre=gta>Voir discution</a></li>
                    </div>
                </div>
            &nbsp;
                <div class="deuxieme_article">
                    <div class="nom_article">
                        <h2>2ème article : Fortnite</h2>
                    </div>
                    <div class="description_article">
                        <p>Desciption : Il s'agit d'un célèbre battle royal créé par Epic games 
                        le but et simple. Etre le dernier survivant de l'ile. Sorti le 21 juillet 2017</p>
                        <li id='bouttonmenu'><a href=vue/list_discu.php?titre=Fornite>Voir discution</a></li>
                    </div>
                </div>
            &nbsp;
                <div class="troisieme_article">
                    <div class="nom_article">
                        <h2>3ème article : Valorant</h2>
                    </div>
                    <div class="description_article">
                        <p>Desciption : Valorant est un jeu vidéo free-to-play de tir à la première personne en multijoueur développé et édité par Riot Games et sorti le 2 juin 2020. </p>
                        <li id='bouttonmenu'><a href=vue/list_discu.php?titre=valorant>Voir discution</a></li>
                    </div>
                </div> 
            </div>
        </main>
    </body>
</html>