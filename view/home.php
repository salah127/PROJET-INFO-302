<form action="." method="post">
    <div class="container">
        <?php
                $tab = home();
                while( $row = mysqli_fetch_assoc($tab)){
                    echo '
                        <div class="card">
                            <a href ="?page=salle&id_salle='.$row["id_salle"].'">
                            <div class="card-header">
                                <span class="tag tag-teal">'. $row["nom_bat"] .'</span>
                                <img src="image/' . $row["photo"] . '" width = "50px" height = "50px" />
                            </div>
                            <div class="card-body">
                                <h4>' . $row["numero"] . ' </h4> 
                                <p> '. $row["Description"] . ' </p>
                                <div class="user">
                                    <a class="prof" href ="index.php?page=profil">'.$_SESSION['username'][0].'</a>
                                    <div class="user-info">
                                        <h5>'.$row["niveau"].'</h5>
                                        <small>'.$row["time_ajout"].'</small>
                                    </div>
                                </div>  
                            </div>
                            </a>
                        </div>
                    ';
                }
            ?>
    </div>
</form>