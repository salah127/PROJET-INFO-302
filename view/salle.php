<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2> Batiment <?php echo '<nav>'. $_SESSION['Nom']. '</nav> '; ?> <strong> > </strong> Salle
            <?php echo '<nav>'. $_GET['numero']. '</nav> '; ?></h2>
    </legend>
    <form action="." method="post">

        <table class=tab>
            <tr>
                <td class=tab>
                    <li>
                        <strong>Numero</strong>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <strong>photo</strong>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <strong>Capacite</strong>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <strong>Niveau requis</strong>
                    </li>
                </td>
            </tr>
            <?php
                $_SESSION['numero'] = $_GET['numero'];
                afficher_salle($_GET['numero']);


                if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){

                    if ($_SESSION["role"]=='Pro'){
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
                        <a class="cnx-sub" href="index.php?page=calendar">Reserver</a>
                    </div>
                    <br>
                    ';
                }}
                else{
                        // alert("Connectez vous avant de reserver une salle.");
                    echo '  <br>
                            <br>
                                <div class="salasghira2 btnajoutsalle2">
                                    <a class="cnx-sub" href="index.php?page=connexion">Reserver</a>
                                </div>
                                <br>
                            ';
                    }
                
                    
                
            ?>
        </table>
    </form>
</fieldset>