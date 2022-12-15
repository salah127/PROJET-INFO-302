<form action="." method="post">
    <div class="momclass">
        <!-- <li><a class="supprof2" href="index.php?page=supprimer">Supprimer</a></li> -->
        <div class="firstclass">
            <div class="secondclass">
                <a class="thirdclass" href="Location: .">
                    <?php echo getpseudo($_GET["id"]);?>
                </a>
            </div>
            <div class="secondclass">
                <input type="hidden" name="action" value="supp">
                <input type="submit" value="Supprimer">
            </div>
            <div class="secondclass">
                <a class="thirdclass"
                    <?php if ($_SESSION["role"]=='internaute'){ echo'href="index.php?page=modifier"' ;} else{echo'href ="index.php?page=pro-modif"';}  ?>>Modifer</a>
            </div>
        </div>
    </div>
</form>