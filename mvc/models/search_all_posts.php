<?php
$dsn = 'mysql:host=192.168.153.10;dbname=202021_projetmvc_acottard';
$user = 'acottard';
$password = '123456789a';
    try {
            $bdd = new PDO($dsn,$user,$password);
    }
    catch(PDOException $e) {
            die('erreur : '.$e->getMessage());
    }
    ?>
<?php
function search_all_posts($bdd){  
    $reponse = $bdd->query('select aut.nom, art.titre, art.description , art.id from auteurs as aut inner join articles as art on aut.id = art.id_auteur');
    $results = $reponse->fetchAll();
 return $results;
}   
?>