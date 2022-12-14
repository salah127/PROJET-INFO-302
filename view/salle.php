<?php
    $_SESSION['id_salle'] = $_GET['id_salle'];
    // $_SESSION['nom_bat'] = $_GET['nom_bat'];
?>

<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>   Salle <?php echo '<nav>'. $_GET['id_salle'] . '</nav> '; ?></h2>
    </legend>
    <form action="." method="post">
        <table class=tab>
            <tr>
                <td class=tab>
                    <li>
                        <div class='card3'><strong>Numero</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card3'><strong>photo</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card3'><strong>Capacite</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card3'><strong>Niveau requis</strong></div>
                    </li>
                </td>
            </tr>
            <?php


            $tab = salle($_GET['id_salle']);
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
                            <li><img src="image/' . $row["photo"] . '" width = "50px" height = "50px" /></div></li>
                            </td>
                            <td class=tab>
                                <li> '. $row["Capacité"] . ' </li> 
                            </td>
                            <td class=tab>
                                <li>'. $row["niveau"] .'</li> 
                            </td>
            
                        <tr>
                        ';
                }
            }

            ?>
            </table>
            <br>
            <?php
            if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){

                if ($_SESSION["role"]=='Pro'){

                    if ($_SESSION["id"]!='32'){
                        // conditon si le id != session[id_pro] ===> reserver 
                        echo '
                        <br>
                        <br>
                        <div class="salasghira2 btnajoutsalle2">
                            <a class="cnx-sub" href="index.php?page=">Modifier</a>
                        </div>
                        <br>
                        <br>
                        <div class="salasghira2 btnajoutsalle2">
                            <input type="hidden" name="action" value="sup-salle">
                            <input class="cnx-sub" type = "submit"  value = "Supprimer">
                        </div> 
                        ';
                    }   
                    else{
                            echo '  
                            <br>
                            <br>
                            <div class="salasghira2 btnajoutsalle2">
                                <input type = "submit" class="cnx-sub" value = "resever">
                            </div>
                            <br>
                            ';
                    
                    }
                }else{
                    echo '  
                    <br>
                    <br>
                    <div class="salasghira2 btnajoutsalle2">
                        <a class="cnx-sub" href="?page=calendrier&id_salle='.$_SESSION['id_salle'].'">resever</a>
                        <br><br><br><br>
                        <a class="cnx-sub" href="index.php?page=calendrier">ajouter des ressources</a>
                    </div>
                    <br>
                    ';
                
                    
                    }
            }else{
                        // alert("Connectez vous avant de reserver une salle.");
                    echo '  <br>
                            <br>
                                <div class="salasghira2 btnajoutsalle2">
                                    <a class="cnx-sub" href="index.php?page=connexion">Se connecter pour reserver</a>
                                </div>
                                <br>
                            ';
                }
            ?>
    </form>
</fieldset>