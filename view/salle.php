<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2> Batiment <?php echo '<nav>'. $_SESSION['Nom']. '</nav> '; ?> <strong> > </strong> Salle
            <?php echo '<nav>'. $_GET['numero']. '</nav> '; ?></h2>
    </legend>
    <form action="." method="post">
        <?php
        $_SESSION['numero'] = $_GET['numero'];
        afficher_salle($_GET['numero']);
    ?>
        <br>
        <br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=">Modifier</a>
        </div>
        <br>
        <br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=">Supprimer</a>
        </div>
    </form>
</fieldset>