<?php
$id = $_GET['id'];
require('view/header.php');
require('models/search_all_posts.php');
require('models/delete_post.php');
supprimer($bdd);
$results = search_all_posts($bdd);
require('view/list_post.php' );
require('view/footer.php' );
?>