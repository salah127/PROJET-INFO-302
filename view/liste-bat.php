<fieldset class='batima'>
    <legend class='titleliste'><h2>Mes batiments</h2></legend>
<form action = "." method = "post">
<!-- <input type="hidden" name="action" value="ajouter-bat"> -->

<?php 

Afficher_bat($_SESSION['id'][0]);

?>
<br>
<a class="button" href ="index.php?page=ajout-bat">+</a>
<!-- <input type = "submit" value = "+" class="button">  -->
</form>
</fieldset>
