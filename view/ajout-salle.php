
<?php 
        // Afficher_bat($_SESSION['id'][0]);
?>


<fieldset class='batima'>
    <legend>
        <h2>Ajout Salle</h2>
    </legend>
    <form action="." method="post">
        <div class="batdiv">
            <div class="batsghir">
                <input class='inputtype cnx-control' type="hidden" name="action" value="Ajout_salle">
                <div class="salasghira">
                    <label for="idinsuser">Numero de la salle:</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="number" name="num" id="idinsuser" placeholder="Numero...">
                </div>
                <br>
            </div>
            <br>
            
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="idinsuser">Photos :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control btnajoutsalle2' type="file" name="Photo" id="ins-entr" placeholder="Photos...">
                </div>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="idinsuser">Capacité :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="number" name="Capacité" id="inst-adr" placeholder="Capacité...">
                </div>
                <br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="idinsuser"> Ressources :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="text" name="Ressources" id="ins-num"
                        placeholder="Ressources">
                </div>
                <br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="ins-mp">Niveau requis :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="RANGE" name="niveau" id="ins-mp"
                        placeholder="Niveau..." min="0" max="400" step="100" list="nv">
                        <datalist id="nv">
                            <option label="0%">0</option>
                            <option >100</option>
                            <option  >200</option>
                            <option >300</option>
                            <option >400</option>
                        </datalist>
                </div><br><br><br>
            </div>
            <style>
                
            </style>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="idinsuser">Description :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="" name="Description" id="ins-email" placeholder="Description...">
                </div>
                <br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label>Nembre d'organisateurs :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="number" name="nb_org">
                </div>
                <br><br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">
                    <input type="submit" class="cnx-sub" value="Ajouter">
                </div>
            </div>
        </div>

    </form>
</fieldset>