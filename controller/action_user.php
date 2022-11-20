<?php
if (isset($_GET["connecte"]) && $_GET["connecte"] == "false") {

    var_dump($_SESSION);

    //var_dump($_SESSION);

    unset($_SESSION['username']);
    unset($_SESSION['connecte']);
    unset($_SESSION['role']);
    session_destroy();
    //$_SESSION['connecte'] = false;
    //var_dump($_SESSION);
    header('location:.');
}


$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}


//formulaire de création de compte
if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['mdp'])) {
            if ($_POST['mdp'] != "" && $_POST['user'] != "" && $_POST['email'] != "") {
                inscription($_POST["user"], $_POST["email"], $_POST["mdp"]);
                //echo 'ok';
                header("Location: ./?page=connexion");
            } else {
                echo 'information incorect';
            }

        }
    }
}

//formulaire de création de compte profesinnel
if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        if (isset($_POST['use']) && isset($_POST['ema']) && isset($_POST['mdpp'])&& isset($_POST['entr'])&& isset($_POST['adr'])&& isset($_POST['num'])) {
            if ($_POST['mdpp'] != "" && $_POST['use'] != "" && $_POST['ema'] != "" && $_POST['entr'] != "" && $_POST['adr'] != "" && $_POST['num'] != "") {
                inscription_pro($_POST["use"], $_POST["ema"], $_POST["mdpp"], $_POST["entr"], $_POST["adr"], $_POST["num"]);
                //echo 'ok';
                header("Location: ./?page=connexion");
            } else {
                echo 'incorect';
            }

        }
    }
}

//formulaire de connexion
if (isset($_POST["action"])) {
    if ($_POST["action"] == "connexion") {
        if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
            if ($_POST['mdp'] != "" && $_POST['pseudo'] != "") {
                $count = connexion($_POST['pseudo'], $_POST['mdp']);
                if ($count) {         // nom d'utilisateur et mot de passe correcte
                    $_SESSION['username'] = $_POST['pseudo'];
                    $_SESSION['connecte'] = true;
                    $_SESSION['role'] = recup_role($_POST['pseudo']);
                    // $_SESSION['id'] = recup_id($_POST['pseudo']);
                    $_SESSION['point'] = recup_pts($_POST['pseudo']);

                    if (isset($_SESSION['username'])) {
                        // echo "<p>Bienvenu " . $_SESSION['id'][0].  "</p>";
                        // echo "<p>Bienvenu " . $_SESSION['id'] . "</p>";
                    }
                } else {
                    echo "err1 erreur sur le mot de passe ou pseudo";
                    // echo "2 eme possibilité : erreur vous êtes déjà connecté en tant que : ";
                    // var_dump($_SESSION);
                }
            } else {
                echo "erreur";
                //echo " vous etes deja connecte?";
                header("Location: ./?page=connexion");

            }
        }
    }
}


//formulaire de modification de compte

if (isset($_POST["action"])) {
    if ($_POST["action"] == "modifier") {
        if (isset($_SESSION['id'][0])) {
            $id = $_SESSION['id'][0]; // $id is now defined
            $password = $_POST['mdp'];
            $mail = $_POST['email'];
            $pseudo =  $_POST['user'];
            modification_compte ($id, $pseudo, $password, $mail); 
            echo "votre compte a été modifié.";
            header("Location: ./?connecte=false");
        }
    }
}


//formulaire de suppression de compte

if (isset($_GET["id"])) {
    $id = $_GET['id']; // $id is now defined
    //echo $id;
    suppression($id);
    //mysqli_close($c);
    //session_destroy();
    echo "<p>votre compte a été supprimé.</p>";
    header("Location: ./?connecte=false");
}