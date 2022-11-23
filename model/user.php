<?php



function inscription($user,$email,$mdp) {
    global $c;
    //if (isset($_POST["action"])) {

        //---------------------------------------------
        //if ($_POST["action"] == "add") {

            $pseudo = mysqli_real_escape_string($c, $user);
            $mdp = mysqli_real_escape_string($c, $mdp);
            $email = mysqli_real_escape_string($c, $email);
            /*= $_POST['user'];
            = $_POST['mdp'];
            = $_POST['email'];*/
            $sql = "INSERT INTO `users` (`id`, `pseudo`, `mdp`, `role`, `email`, `point`) VALUES (NULL, '$pseudo', '$mdp', 'internaute', '$email', 10);";
            mysqli_query($c, $sql);

            //var_dump($sql);



}

function inscription_pro($user,$email,$mdp,$entreprise,$adresse,$num) {
    global $c;
    //if (isset($_POST["action"])) {

        //---------------------------------------------
        //if ($_POST["action"] == "add") {

            $pseudo = mysqli_real_escape_string($c, $user);
            $mdp = mysqli_real_escape_string($c, $mdp);
            $email = mysqli_real_escape_string($c, $email);
            /*= $_POST['user'];
            = $_POST['mdp'];
            = $_POST['email'];*/
            $sql = "INSERT INTO `users` (`id`, `pseudo`, `mdp`, `role`, `email`, `entreprise`, `adresse`, `numero`) VALUES (NULL, '$pseudo', '$mdp', 'Pro', '$email', '$entreprise', '$adresse', '$num');";
            mysqli_query($c, $sql);

            //var_dump($sql);



}

function connexion($pseudo,$mdp) {
    global $c;
    //$sql = "SELECT * FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $sql = "SELECT count(*) FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $exec_requete = mysqli_query($c,$sql);
    $reponse = mysqli_fetch_array($exec_requete);


    $sql = "SELECT id FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $exec_requete = mysqli_query($c,$sql);
    $reponse2 = mysqli_fetch_array($exec_requete);

    $_SESSION['id'] = $reponse2;

    return $reponse['count(*)'];
}



function recup_role($pseu){
    global $c;
    $sql = "select pseudo, role FROM `users`";
    $resultat = mysqli_query($c,$sql);
    $role = "";
    while ($row = mysqli_fetch_assoc($resultat)){
        if ($pseu == $row['pseudo']){
            $role = $row["role"];
        }
    }
    return $role;
}

function recup_id($pseu){
    global $c;
    $sql = "select pseudo, id FROM `users`";
    $resultat = mysqli_query($c,$sql);
    $role = "";
    while ($row = mysqli_fetch_assoc($resultat)){
        if ($pseu == $row['pseudo']){
            $id = $row["id"];
        }
    }
    return $id;
}

function recup_pts($pseu){
    global $c;
    $sql = "select pseudo, point FROM `users`";
    $resultat = mysqli_query($c,$sql);
    $role = "";
    while ($row = mysqli_fetch_assoc($resultat)){
        if ($pseu == $row['pseudo']){
            $point = $row["point"];
        }
    }
    return $point;
}




function modification_compte ($id, $pseudo, $password, $mail){
    global $c;
    // $sql ="UPDATE `users` SET`pseudo`='.$pseudo.',`mdp`='.$password.',`role`=NULL,`email`='.$mail.',`entreprise`=NULL,`adresse`=NULL,`numero`=NULL,`point`=NULL WHERE users.id = '.$id.'";
    $sql = "UPDATE users SET mdp = '$password', email = '$mail', pseudo = '$pseudo' WHERE users.id = $id";

    //echo $sql;
    // var_dump($sql);
    mysqli_query($c,$sql);
    // var_dump($sql);
    // var_dump(mysqli_error($c));
    // exit;


}



function modification_pro ($id, $pseudo, $mail, $entreprise , $adresse, $num, $password){
    global $c;
    // $sql ="UPDATE `users` SET`pseudo`='.$pseudo.',`mdp`='.$password.',`role`=NULL,`email`='.$mail.',`entreprise`=NULL,`adresse`=NULL,`numero`=NULL,`point`=NULL WHERE users.id = '.$id.'";
    $sql = "UPDATE users SET mdp = '$password', email = '$mail', pseudo = '$pseudo', entreprise = '$entreprise', adresse = '$adresse', numero = '$num' WHERE users.id = $id";

    mysqli_query($c,$sql);

}



function suppression ($id){
    global $c;
    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($c,$sql);
}

/*function delete_topic()
{
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if ((isset($_GET["name"]) and recup_role($_GET["pseu"] == "admin" )){
    $name = $_GET['name'];
    $sql = "DELETE FROM name WHERE id='" . $name . "'";
    mysqli_query($c, $sql);
    echo "Le topic a été supprimé.";
}
}*/




