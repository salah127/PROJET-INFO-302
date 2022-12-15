<?php
    $_SESSION['id_salle'] = $_GET['id_salle'];
?>
<<<<<<< HEAD

<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>   Salle <?php echo '<nav>'. $_GET['id_salle'] . '</nav> '; ?></h2>
    </legend>
    
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
=======
<div class="containerSalle">
    <form action="." method="post">
        <div class="cardSalle">
>>>>>>> 40d0bdf516e6c6a34671e2e98cf68b881d99aa32
            <?php
            $tab = salle($_GET['id_salle']);
            if ($tab == NULL){
                echo ' Il ya aucun batiment';
            } else{
                while( $row = mysqli_fetch_assoc($tab)){
		
                    echo'
                        <h2> Salle: '. $_GET['id_salle'] .'</h2>
                        <div class="card-top">
                        <div class="card-headerSalle">
                            <img src="image/' . $row["photo"] . '" width = "50px" height = "50px" />
                        </div>
                        <div class="card-bodySalle">
                            <div class="hnaSalle">
                                <div class="h4">Numero: ' . $row["numero"] . '</div>  
                                <div class="h4">Capacite: '. $row["Capacité"] . '</div>  
                                <div class="h4">Niveau requis: '. $row["niveau"] .'</div>   
                                <div class="h4">Ressources: ' . $row["Ressources"] . '</div>  
                                <div class="h4">Description: '. $row["Description"] . '</div>  
                                <div class="h4">Nombre d\'organisateurs: '. $row["nb_org"] .'</div>   
                                <div class="h4">Nom du Batiment: ' . $row["nom_bat"] . '</div>  
                                <div class="h4">La Salle a été ajouté le: '. $row["time_ajout"] . '</div>  
                            </div>
                        </div>
                        </div>
                        ';
                }
            }
            if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){

                if ($_SESSION["role"]=='Pro'){

                    if ($_SESSION["id"]!='32'){
                        // conditon si le id != session[id_pro] ===> reserver 
                        echo '
                            <div class="btnSalleDiv">
                                <a class="btnSalle" href="index.php?page=">Modifier</a>
                            </div>
                            <div class="btnSalleDiv">
                                <input type="hidden" name="action" value="sup-salle">
                                <input class="btnSalle" type = "submit"  value = "Supprimer">
                            </div>
                        ';
                    }   
                    else{
                            echo '  
<<<<<<< HEAD
                            <br>
                            <br>
                            <div class="salasghira2 btnajoutsalle2">
                                <a class="cnx-sub"  href="?page=calendrier&id_salle='.$_SESSION['id_salle'].'">Resever</a>
                            </div>
                            <br>
=======
                            <div class="btnSalleDiv">
                                <input type = "submit" class="btnSalle" value = "resever">
                            </div>   
>>>>>>> 40d0bdf516e6c6a34671e2e98cf68b881d99aa32
                            ';
                    }
                }else{
                    echo '  
<<<<<<< HEAD
                    <br>
                    <br>
                    <div class="salasghira2 btnajoutsalle2">
                        <a class="cnx-sub"  href="?page=calendrier&id_salle='.$_SESSION['id_salle'].'">Resever</a>
                        <br><br><br><br>';
                        if(exist_org($_SESSION["id"][0],$_SESSION["id_salle"])==0){
                            echo'
                            <form action="." method="post">
                        <input type="hidden" name="action" value="organisateur">
                        <input type="submit" class="cnx-sub" value="Devenir Organisateur">
                        </form>';
                        
                        }else{
                            echo'
                            <form action="." method="post">
                            <input type="hidden" name="action" value="Dimissioné">
                            <input type="submit" class="cnx-sub" value="Dimissioné">
                            </form>';

                        }

                        echo'
                        <br><br><br><br>
                        <a class="cnx-sub"  href="index.php?page=ajout-ressource">Ajouter des ressources</a>
                        
=======
                    <div class="btnSalleDiv">
                        <a class="btnSalle" href="?page=calendrier&id_salle='.$_SESSION['id_salle'].'">resever</a>
                        <a class="btnSalle" href="index.php?page=calendrier">ajouter des ressources</a>
>>>>>>> 40d0bdf516e6c6a34671e2e98cf68b881d99aa32
                    </div>
                    ';
                    }
            }else{
                        // alert("Connectez vous avant de reserver une salle.");
                    echo '  
                                <div class="btnSalleDiv">
                                    <a class="btnSalle" href="index.php?page=connexion">Se connecter pour reserver</a>
                                </div>
                            ';
                }
            ?>
<<<<<<< HEAD
    
</fieldset>
=======
        </div>
    </form>
    </fieldset>
</div>
>>>>>>> 40d0bdf516e6c6a34671e2e98cf68b881d99aa32
