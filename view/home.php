<fieldset class='batima2'>
    <legend class='titleliste'>
        <i class="fa fa-home"></i>
        <h2> Home</h2>
    </legend>
    <form action="." method="post">
        <table class=tab>
            <tr>
                <td class=tab>
                    <li>
                        <div class='card'><strong>Numero</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card'><strong>photo</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card'><strong>Capacite</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card'><strong>Niveau requis</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card'><strong>Nom batiment</strong></div>
                    </li>
                </td>
            </tr>
            <?php
                $tab = home();
                while( $row = mysqli_fetch_assoc($tab)){
		
                    echo'
                        <tr>
            
                            <td class=tab> 
                                <li>' . $row["numero"] . ' </li> 
                            </td>
                            <td class=tab> 
                                <li><img src = "data:image/jpg;base64,' . base64_encode($row['photo']) . '" width = "50px" height = "50px"/></li>
                            </td>
                            <td class=tab>
                                <li> '. $row["Capacité"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li>'. $row["niveau"] .'</li> 
                            </td>
            
                            </td>
                            <td class=tab>
                                <li>'. $row["nom_bat"] .'</li> 
                            </td>
                            <td class=tab>
                                <li>
                                    <a class="button" href ="index.php?page=salle&id_salle='.$row["id_salle"].'"> Afficher </a>
                                </li> 
                            </td>
            
                        <tr>
                        ';
                }
                echo'
                </table>';
            ?>

    </form>
</fieldset>