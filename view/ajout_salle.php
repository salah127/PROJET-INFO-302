<fieldset class='batima'>
    <legend class='titleliste' >
        <h2> Ajout Salle </h2>
    </legend>
    <form action="." method="post">
        <div class="batdiv">
            <div class="batsghir">
                <input class='inputtype cnx-control' type="hidden" name="action" value="add">
                <div class="salasghira">
                    <label for="idinsuser">Numero de la salle:</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="number" name="num" id="idinsuser" placeholder="Numero...">
                </div>
                <br>
            </div>
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
                    <label for="idinsuser">Photos :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control btnajoutsalle2' type="file" name="Photo" id="ins-entr" placeholder="Photos...">
                </div>
                <br>
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
                        placeholder="Numero de l'entreprise...">
                </div>
                <br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="ins-mp">Disponibilité :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="datetime-local" name="Disponibilité" id="ins-mp"
                        placeholder="Disponibilité...">
                </div><br><br><br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label>Nembre d'organisateurs :</label>
                </div>
                <div class="salasghira">
                    <input class='inputtype cnx-control' type="number" name="nb_salle">
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