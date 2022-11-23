<form action = "." method = "post" class="menu">                                <ul class="CreRank">
                                    <li ><a class="button" href ="index.php?page=supprimer">Supprimer</a></li>
                                    <li ><a class="button" <?php if ($_SESSION["role"]=='internaute'){ echo'href="index.php?page=modifier"' ;} else{echo'href ="index.php?page=pro-modif"';}  ?>>Modifer</a></li>
                                </ul>
</form>


