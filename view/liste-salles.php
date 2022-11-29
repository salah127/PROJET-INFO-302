<?php
    $_SESSION['Nom'] = $_GET['Nom'];
?>
<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>batiment <?php echo '<nav>'. $_GET['Nom'] . '</nav> '; ?></h2>
    </legend>
    <form action="." method="post">
        <?php 
            afficher_salles($_GET['Nom']);
        ?>
        <input type="hidden" name="action" value="supp">
        <br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=ajout-salle">Ajouter</a>
        </div>
        <br>
        <br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=">Modifier</a>
        </div>
        <br>
        <br>
        <li>
		<input class="button" type = "submit"  value = "Supp">
	    </li> 

        <!-- <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=">Supprimer</a>
        </div> -->
    </form>
</fieldset>