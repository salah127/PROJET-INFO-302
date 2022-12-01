<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2> Home</h2>
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
                <td class=tab>
                    <li>
                        <strong>Nom batiment</strong>
                    </li>
                </td>
            </tr>
            <?php
                
                afficher_home();
            ?>
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
    </form>
</fieldset>
