
<fieldset class='batima2'>
    <legend class='titleliste'>
        <h2>Mes batiments</h2>
    </legend>
    <form action="." method="post">

	<table class=tab>
		<tr>
            <td class=tab>
				<li > 
					<strong>Nom</strong>
				</li>
			</td>
			<td class=tab>
			<li > 
			<strong>Adresse</strong>
		</li>
			</td>
			<td class=tab>
			<li > 
			<strong>Nembre de salle</strong>
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