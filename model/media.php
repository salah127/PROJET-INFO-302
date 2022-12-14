<?php

use LDAP\Result;

function existe_bat($nom){
	global $c;
	$sql = "select Nom FROM `batiment`";
	$resultat = mysqli_query($c,$sql);
    $meme_bat = false;
    while ($row = mysqli_fetch_assoc($resultat)){
        if ($nom == $row['Nom']){
			$meme_bat = True;
		}
	}
    return $meme_bat;
}



function creer_bat($nom, $adresse, $nb_salle, $id_pro){
	global $c;
	$nom = mysqli_real_escape_string($c, $nom);
	$adresse = mysqli_real_escape_string($c, $adresse);
	$nb_salle = mysqli_real_escape_string($c, $nb_salle);
	$id_pro = mysqli_real_escape_string($c, $id_pro);
	// $sql = "INSERT INTO batiment (Nom, adresse, nb_salle, id_pro) VALUES ($nom, $adresse,$nb_salle, $id_pro);";
	$sql = "INSERT INTO `batiment` (`Nom`, `adresse`, `nb_salle`, `id_pro`) VALUES ('$nom', '$adresse', '$nb_salle', '$id_pro');";
	mysqli_query($c, $sql);
}


function batiments($id){
	global $c;
	$sql = " SELECT * FROM batiment WHERE id_pro = ' $id ' ORDER BY `batiment`.`nb_salle` ASC";
	$resultat = mysqli_query($c, $sql);
	return $resultat;
}

function existe_salle($num, $nom){
	global $c;
	$sql = "SELECT numero FROM `salle` WHERE nom_bat = $nom";
	$resultat = mysqli_query($c,$sql);
    $meme_bat = false;
    while ($row = mysqli_fetch_assoc($resultat)){
        if ($num == $row['numero']){
			$meme_bat = True;
		}
	}
    return $meme_bat;
}

function ajout_nb_salle($nom){
    global $c;
	$sql1 = "SELECT nb_salle FROM batiment WHERE  Nom = '$nom' ";
	$res = mysqli_query($c,$sql1);
	$row = mysqli_fetch_assoc($res);
	$nb = $row['nb_salle']+1 ;
    $sql = "UPDATE batiment SET nb_salle = '$nb' WHERE Nom = '$nom'";
    $resultat = mysqli_query($c,$sql);
}
function creer_salle($num, $Photo, $Capacité, $Ressources, $niveau, $Description, $nb_org, $nom_bat){
	global $c;
	$num = mysqli_real_escape_string($c, $num);
	$Photo = mysqli_real_escape_string($c, $Photo);
	$Capacité = mysqli_real_escape_string($c, $Capacité);
	$Ressources = mysqli_real_escape_string($c, $Ressources);
	$niveau = mysqli_real_escape_string($c, $niveau);
	$Description = mysqli_real_escape_string($c, $Description);
	$nb_org = mysqli_real_escape_string($c, $nb_org);
	$nom_bat = mysqli_real_escape_string($c, $nom_bat);

	$sql = "INSERT INTO `salle` (`id_salle`, `numero`,`Photo`, `Capacité`, `Ressources`, `niveau`, `Description`, `nb_org`, `nom_bat`, `time_ajout` ) VALUES (NULL ,'$num', '$Photo', '$Capacité', '$Ressources', '$niveau', '$Description',' $nb_org', '$nom_bat', current_timestamp() );";
	mysqli_query($c, $sql);
}


function ajout_ressources($nom,$ajouter_par){
	global $c;
	$sql = "INSERT INTO `ressources` (`id_ressource`,`nom`, `ajouter_par`, `time_ajout` ) VALUES (NULL,'$nom','$ajouter_par',current_timestamp() );";
	mysqli_query($c, $sql);
}


function salles($nom){
	global $c;
	$sql = " SELECT * FROM salle WHERE nom_bat = '$nom' ORDER BY `salle`.`numero` ASC ";
	$resultat = mysqli_query($c, $sql);
	return $resultat;
}
function supp_bat ($nom){
    global $c;
    $sql1 = "DELETE FROM batiment WHERE Nom = '$nom'";
    $sql = "DELETE FROM salle WHERE nom_bat='$nom'";
    mysqli_query($c,$sql);
    mysqli_query($c,$sql1);
}
function salle($id){
	global $c;
	$sql = " SELECT * FROM salle WHERE id_salle = '$id'  ";
	$resultat = mysqli_query($c, $sql);
	return $resultat;
}
function supp_salle ($id){
    global $c;
    $sql1 = "DELETE FROM salle WHERE id_salle = '$id'";
    $sql = "DELETE FROM reservation WHERE id_salle='$id'";
    mysqli_query($c,$sql);
    mysqli_query($c,$sql1);
}


function rec_nom($nom){
	global $c;
	$sql = "SELECT Nom FROM batiment WHERE nom_bat = '$nom'";
	$resultat = mysqli_query($c, $sql);
	$row = mysqli_fetch_assoc($resultat);
	if ($row == NULL){
		echo 'Il ya aucunne salle';
	} else{
		salles($nom);
	}
}

function home(){
	global $c;
	$sql = " SELECT * FROM salle ORDER BY time_ajout ";
	$resultat = mysqli_query($c, $sql);
	return $resultat;
}



function reserver( $date, $id_salle,$id_user){
	global $c;
	$sql = "INSERT INTO calendrier (`id`, `date`, `id_salle`, `id_user` ) VALUES (NULL, '$date', '$id_salle', '$id_user')";
	$result = mysqli_query($c, $sql);
}


function supp_res($date,$id){
	global $c;
	$sql = "DELETE FROM calendrier WHERE date='$date' AND id_salle= '$id'  ";
	mysqli_query($c, $sql);
}

function rech_res($date,$id_salle,$id){
	global $c;
	$sql = "SELECT id_salle FROM calendrier WHERE date= '$date' AND id_salle='$id_salle' AND id_user='$id'";
	$resultat = mysqli_query($c, $sql);
    $row = mysqli_fetch_assoc($resultat);
	return $row['id_salle'];
}

function exist_date($date,$id_salle,$id){
	global $c;
	$sql = "SELECT * FROM calendrier WHERE  date='$date' AND id_salle='$id_salle' AND id_user='$id'";
	$resultat = mysqli_query($c, $sql);
	$row = mysqli_num_rows($resultat);
	return $row;
}






function ranking(){
	global $c;
	$sql = " SELECT * FROM users ORDER BY point ";
	$resultat = mysqli_query($c, $sql);
	return $resultat;
}




// function recup_nom($id){
//     global $c;
// 	$sql =  "select Nom, id_pro FROM `batiment`";
//     $resultat = mysqli_query($c,$sql);
// 	$role = "";
// 	while ($row = mysqli_fetch_assoc($resultat)){
//         if ($id == $row['id_pro']){
//             $nom = $row["Nom"];
//         }
//     }
//     return $nom;
// }