<fieldset class='batima2'>
    <legend class='titleliste'>
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