<form action="." method="post">
    <div class="supprof">
        <!-- <li><a class="supprof2" href="index.php?page=supprimer">Supprimer</a></li> -->
        <ul><li><a class="prof prof2" href ="Location: ."><?php echo getpseudo($_GET["id"]);?></a></li>

        <input type="hidden" name="action" value="supp">
        <input class="supprof2" type="submit" value="Supprimer">
        <li><a class="supprof1"
                <?php if ($_SESSION["role"]=='internaute'){ echo'href="index.php?page=modifier"' ;} else{echo'href ="index.php?page=pro-modif"';}  ?>>Modifer</a>
        </li>
        </ul>
    </div>
</form>