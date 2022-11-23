<fieldset>
    <legend><h2>Batiment <?php  echo '<nav>'. $_SESSION['Nom'] . '</nav>';?>  </h2></legend>
<form action = "." method = "post">
    <input type="hidden" name="action" value="add">
    <label for="idinsuser">Numero de la salle:</label>
    <input type ="number" name="num" class="cnx-control" id="idinsuser" placeholder="Numero..."><br>
    <br>
    <label for="idinsuser">Description :</label>
    <input type = "" name="Description" class="cnx-control" id="ins-email" placeholder="Description..."><br>
    <br>
    <label for="idinsuser">Photos :</label>
    <input type="file" name="Photo" class="cnx-control" id="ins-entr" placeholder="Photos..."><br>
    <br>
    <label for="idinsuser">Capacité :</label>
    <input type ="number" name="Capacité" class="cnx-control" id="inst-adr" placeholder="Capacité..."><br>
    <br>
    <label for="idinsuser"> Ressources :</label>
    <input type ="text" name="Ressources" class="cnx-control" id="ins-num" placeholder="Numero de l'entreprise..."><br>
    <br>
    <label for="ins-mp">Disponibilité :</label>
    <input type = "datetime-local" name="Disponibilité" class="cnx-control" id="ins-mp" placeholder="Disponibilité..."><br><br>
    <label>Nembre d'organisateurs :</label>
    <input type = "number" name="nb_salle" class="cnx-control"><br><br>
    <br>
    <input type = "submit" class="cnx-sub" value = "Ajouter">

    
    

</form>
</fieldset>