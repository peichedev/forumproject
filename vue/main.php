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
                    <a href="vue/cree_discu.php?log=1">nouvelle discution</a> <?php }
                    else
                    { ?>
                        <a href="vue/cree_discu.php?log=2">nouvelle discution</a>
                    <?php } ?>  

                </button>
            </div>
            &nbsp;
            <br>
            &nbsp;
            <div class="article">
                <div class="premier_article">
                    <div class="nom_article">
                        <h2>1ère article : Grand Theft Auto</h2>
                    </div>
                    <div class="description_article">
                        <p>Description : Il s'agit du célèbre jeu créé par rocktars. Sorti le 17 septembre 2013 </p>
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
                    </div>
                </div>
            &nbsp;
                <div class="troisieme_article">
                    <div class="nom_article">
                        <h2>3ème article : Valorant</h2>
                    </div>
                    <div class="description_article">
                        <p>Desciption : Valorant est un jeu vidéo free-to-play de tir à la première personne en multijoueur développé et édité par Riot Games et sorti le 2 juin 2020. </p>
                    </div>
                </div> 
            </div>
        </main>
    </body>
</html>