<fieldset class='batima2'>
    <legend class='titleliste'>
        <i class="fa fa-home"></i>
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

    </form>
</fieldset>