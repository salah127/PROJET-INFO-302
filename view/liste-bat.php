<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>Mes batiments</h2>
    </legend>
    <form action="." method="post">
        <!-- <input type="hidden" name="action" value="ajouter-bat"> -->

        <?php 

Afficher_bat($_SESSION['id'][0]);

?>
        <br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=ajout-bat">+</a>
        </div>
        <!-- <input type = "submit" value = "+" class="button">  -->
    </form>
</fieldset>