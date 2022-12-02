<?php
    $_SESSION['id_salle'] = $_GET['id_salle'];
    // $_SESSION['nom_bat'] = $_GET['nom_bat'];
?>

<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2> Batiment <?php echo '<nav>'.  $_SESSION['nom_bat']. '</nav> '; ?> <strong> > </strong> Salle
            <?php echo '<nav>'. $_GET['id_salle']. '</nav> '; ?></h2>
    </legend>
    <form action="." method="post">
    <input type="hidden" name="action" value="reserver">
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
                // $_SESSION['id_pro'] = $_GET['id_salle'];
                afficher_salle($_GET['id_salle']);


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
                            <a class="cnx-sub" href="index.php?page=">Supprimer</a>
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
                        <input type = "submit" class="cnx-sub" value = "resever">
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
        </table>
    </form>
</fieldset>