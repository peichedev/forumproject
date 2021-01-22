        <?php           
        foreach ($results as $values) {
             echo '<a href="delete.php?id='.$values['id'].'">Supprime</a>'.' | '.$values['nom'].' | '.$values['titre'].' | '.$values['description'].'<br>';
        }
        ?>       
    </body>
</html>

