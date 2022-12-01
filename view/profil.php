<form action="." method="post">
    <div class="supprof">
        <li><a class="supprof1" href="index.php?page=supprimer">Supprimer</a></li>
        <li><a class="supprof2"
                <?php if ($_SESSION["role"]=='internaute'){ echo'href="index.php?page=modifier"' ;} else{echo'href ="index.php?page=pro-modif"';}  ?>>Modifer</a>
        </li>
    </div>
</form>