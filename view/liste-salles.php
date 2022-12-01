<?php
    $_SESSION['Nom'] = $_GET['Nom'];
?>
<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>batiment <?php echo '<nav>'. $_GET['Nom'] . '</nav> '; ?></h2>
    </legend>
    <form action="." method="post">
	<table class=tab>
		<tr>
            <td class=tab>
				<li > 
					<div class='card2'><strong>Numero</strong></div>
				</li>
			</td>
			<td class=tab>
				<li> 
					<div class='card2'><strong>Capacite</strong></div>
				</li>
			</td>
			<td class=tab>
				<li> 
					<div class='card2'><strong>Niveau requis</strong></div>
				</li>
			</td>
		</tr>
        <?php 
            afficher_salles($_GET['Nom']);
        ?>
        </table>
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