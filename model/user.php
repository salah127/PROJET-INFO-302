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

function recup_pts($id){
    global $c;
    $sql = "select id, point FROM `users`";
    $resultat = mysqli_query($c,$sql);
    $role = "";
    while ($row = mysqli_fetch_assoc($resultat)){
        if ($id == $row['id']){
            $point = $row["point"];
        }
    }
    return $point;
}

function getpseudo($id){
	global $c;
	$sql = "SELECT pseudo FROM users Where id='$id'";
	$resultat = mysqli_query($c, $sql);
    $row = mysqli_fetch_assoc($resultat);
	return $row['pseudo'][0];
}




function modification_compte ($id, $pseudo, $password, $mail){
    global $c;


    $pseudo = mysqli_real_escape_string($c, $pseudo);
	$password = mysqli_real_escape_string($c, $password);
	$mail = mysqli_real_escape_string($c, $mail);


    // $sql ="UPDATE `users` SET`pseudo`='.$pseudo.',`mdp`='.$password.',`role`=NULL,`email`='.$mail.',`entreprise`=NULL,`adresse`=NULL,`numero`=NULL,`point`=NULL WHERE users.id = '.$id.'";
    $sql = "UPDATE users SET mdp = '$password', email = '$mail', pseudo = '$pseudo' WHERE users.id = '$id'";

    //echo $sql;
    // var_dump($sql);
    mysqli_query($c,$sql);
    // var_dump($sql);
    // var_dump(mysqli_error($c));
    // exit;


}



function modification_pro ($id, $pseudo, $mail, $entreprise , $adresse, $num, $password){
    global $c;

    $pseudo = mysqli_real_escape_string($c, $pseudo);
	$mail = mysqli_real_escape_string($c, $mail);
	$entreprise = mysqli_real_escape_string($c, $entreprise);
    $adresse = mysqli_real_escape_string($c, $adresse);
	$num = mysqli_real_escape_string($c, $num);
	$password = mysqli_real_escape_string($c, $password);

    $sql = "UPDATE users SET mdp = '$password', email = '$mail', pseudo = '$pseudo', entreprise = '$entreprise', adresse = '$adresse', numero = '$num' WHERE users.id = '$id'";

    mysqli_query($c,$sql);

}



function suppression ($id){
    global $c;
    $sql1 = "DELETE FROM batiment WHERE id_pro='$id'";
    $sql = "DELETE FROM users WHERE id='$id'";
    mysqli_query($c,$sql1);
    mysqli_query($c,$sql);
}

function ajout_pts ($id,$pts,$nb){
    global $c;
    $sql1 = "UPDATE users SET POINT = '$pts'+'$nb' WHERE id = '$id'";
    mysqli_query($c,$sql1);

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




