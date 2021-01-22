<?php
require('view/header.php');
require('models/search_all_posts.php');
$results = search_all_posts($bdd);
require('view/list_post.php' );
require('view/footer.php' );
?>
