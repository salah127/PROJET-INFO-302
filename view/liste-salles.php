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
            $tab = salles($_SESSION['Nom']);
            if ($tab == NULL){
                echo ' Il ya aucun batiment';
            } else{
                while( $row = mysqli_fetch_assoc($tab)){
                    echo'
                        <tr>
                            <td class=tab> 
                                <li>' . $row["numero"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li> '. $row["Capacité"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li>'. $row["niveau"] .'</li> 
                            </td>
                            <td class=tab>
                                <li>
                                    <a class="button" href ="index.php?page=salle&id_salle='.$row["id_salle"].'"> Afficher </a>
                                </li> 
                            </td>
            
                        <tr>
                        ';
                }
            }
        ?>
        </table>
        <input type="hidden" name="action" value="supp">
        <br>
        <div class="salasghira2 btnajoutsalle2">
            <?php
            $_SESSION['nb_salle'] = 1;
            $_SESSION['Ressources'] = "";
            ?>
            <a class="cnx-sub" href="index.php?page=ajout-salle">Ajouter</a>
        </div>
        <br>
        <br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=" >Modifier</a>
        </div>
        <br>
        <br>
        <li>
		    <input class="cnx-sub" type = "submit"  value = "Supp">
	    </li> 

        <!-- <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=">Supprimer</a>
        </div> -->
    </form>
</fieldset>