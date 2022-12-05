<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>Mes batiments</h2>
    </legend>
    <form action="." method="post">

        <table class=tab>
            <tr>
                <td class=tab>
                    <li>
                        <div class='card2'><strong>Nom</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card2'><strong>Adresse</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card2'><strong>Nembre de salle</strong></div>
                    </li>
                </td>
            </tr>
            <?php 
            $tab = batiments($_SESSION['id'][0]);
            if ($tab == NULL){
                echo ' Il ya aucun batiment';
            } else{
                while( $row = mysqli_fetch_assoc($tab)){
                    echo'
                        <tr>
                            <td class=tab> 
                                <li>' . $row["Nom"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li> '. $row["adresse"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li>'. $row["nb_salle"] .'</li> 
                            </td>
                            <td class=tab>
                                <li>
                                    <a class="button" href ="index.php?page=liste-salles&Nom='.$row["Nom"].'"> Afficher </a>
                                </li> 
                            </td>
                        <tr>
                        ';
                }
            }
        ?>
        </table>
        <br><br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=ajout-bat">+</a>
        </div>
    </form>
</fieldset>