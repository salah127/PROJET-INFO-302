<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>Mes batiments</h2>
    </legend>
    <form action="." method="post">

        <table class=tab>
            <tr>
                <td class=tab>
                    <li>
                        <div class='card2'><strong>Nom</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card2'><strong>Adresse</strong></div>
                    </li>
                </td>
                <td class=tab>
                    <li>
                        <div class='card2'><strong>Nembre de salle</strong></div>
                    </li>
                </td>
            </tr>
            <?php 
            Afficher_bat($_SESSION['id'][0]);
        ?>
        </table>
        <br><br>
        <div class="salasghira2 btnajoutsalle2">
            <a class="cnx-sub" href="index.php?page=ajout-bat">+</a>
        </div>
    </form>
</fieldset>