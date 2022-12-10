<?php 
        // Afficher_bat($_SESSION['id'][0]);
?>


<fieldset class='batima'>
    <?php

for ($i = 1; $i <= $_SESSION['nb_salle']; $i++) {
    echo'
    <legend>
        <h2> Formulaire Salle '.$i.' </h2>
    </legend>
        <div class="batdiv">
            <div class="batsghir">
                
                <div class="salasghira">
                    <label for="idinsuser">Numero de la salle:</label>
                </div>
                <div class="salasghira">
                    <input class="inputtype cnx-control" type="number" name="num'.$i.'" id="idinsuser"
                        placeholder="Numero...">
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
                    <input class="inputtype cnx-control btnajoutsalle2" type="file" name="Photo'.$i.'" id="ins-entr"
                        placeholder="Photos...">
                </div>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="idinsuser">Capacité :</label>
                </div>
                <div class="salasghira">
                    <input class="inputtype cnx-control" type="number" name="Capacité'.$i.'" id="inst-adr"
                        placeholder="Capacité...">
                </div>
                <br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="idinsuser"> Ressources :</label>
                </div>
                <div class="salasghira">
                    <input class="inputtype cnx-control" type="text" name="Ressources'.$i.'" id="ins-num"
                        placeholder="Ressources">

                    <button onclick="myFunction()">Click me&</button>
                    <p id="demo"></p>

                    <script>
                        function myFunction() {
                            document.getElementById("demo").innerHTML = "Hello World";
                            $("#demo").load(location.href+" #demo","Hello World");
                        }
                    </script>
                </div>
                <br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label for="ins-mp">Niveau requis :</label>
                </div>
                <div class="salasghira">
                    <input class="inputtype cnx-control" type="RANGE" name="niveau'.$i.'" id="ins-mp" placeholder="Niveau..."
                        min="0" max="400" step="100" list="nv">
                    <datalist id="nv">
                        <option label="0%">0</option>
                        <option>100</option>
                        <option>200</option>
                        <option>300</option>
                        <option>400</option>
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
                    <input class="inputtype cnx-control" type="" name="Description'.$i.'" id="ins-email"
                        placeholder="Description...">
                </div>
                <br>
            </div>
            <br>
            <div class="batsghir">
                <div class="salasghira">
                    <label>Nembre d"organisateurs :</label>
                </div>
                <div class="salasghira">
                    <input class="inputtype cnx-control" type="number" name="nb_org'.$i.'">
                </div>
                <br><br>
            </div>
            <br>
            <br>
            <br>
            <br>

            ';
}


?>
<form action="." method="post">
            <div class="batsghir">
                <div class="salasghira btnajoutsalle">
                    <input type="hidden" name="action" value="Ajout_salle">
                    <input type="submit" class="cnx-sub" value="Ajouter">
                </div>
            </div>
        </div>

    </form>
</fieldset>