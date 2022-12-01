<?php

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


function batt($id){
	global $c;
	$sql = " SELECT Nom, adresse, nb_salle FROM batiment WHERE id_pro = ' $id '  ";
	$resultat = mysqli_query($c, $sql);

	while( $row = mysqli_fetch_assoc($resultat)){
		echo'
			<tr>
				<td class=tab> 
					<li>' . $row["Nom"] . ' </li> 
				</td>
				<td class=tab>
					<li> '. $row["adresse"] . ' </li> 
				</td>
				<td class=tab>
					<li>'. $row["nb_salle"] .'</li> 
			    </td>
				<td class=tab>
					<li>
						<a class="button" href ="index.php?page=liste-salles&Nom='.$row["Nom"].'"> Afficher </a>
					</li> 
			    </td>
			<tr>
			';
	}

}



function afficher_bat($id){
	global $c;
	$sql = " SELECT Nom, adresse, nb_salle FROM batiment WHERE id_pro = '$id'  ";
	$resultat = mysqli_query($c, $sql);
	$row = mysqli_fetch_assoc($resultat);
	if ($row == NULL){
		echo ' Il ya aucun batiment';
	} else{
		batt($id);
	}
}








function existe_salle($num){
	global $c;
	$sql = "select numero FROM `salle`";
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

	$sql = "INSERT INTO `salle` (`numero`, `Photo`, `Capacité`, `Ressources`, `niveau`, `Description`, `nb_org`, `nom_bat`, `time_ajout` ) VALUES ('$num', '$Photo', '$Capacité', '$Ressources', '$niveau', '$Description',' $nb_org', '$nom_bat', current_timestamp() );";
	mysqli_query($c, $sql);
}
function salles($nom){
	global $c;
	$sql = " SELECT numero, Capacité, niveau FROM salle WHERE nom_bat = '$nom'  ";
	$resultat = mysqli_query($c, $sql);

	while( $row = mysqli_fetch_assoc($resultat)){
		echo'
			<tr>
				<td class=tab> 
					<li>' . $row["numero"] . ' </li> 
				</td>
				<td class=tab>
					<li> '. $row["Capacité"] . ' </li> 
				</td>
				<td class=tab>
					<li>'. $row["niveau"] .'</li> 
			    </td>
				<td class=tab>
					<li>
						<a class="button" href ="index.php?page=salle-pro&numero='.$row["numero"].'"> Afficher </a>
					</li> 
			    </td>

			<tr>
			';
	}

}
function supp_bat ($nom){
    global $c;
    $sql1 = "DELETE FROM batiment WHERE Nom = '$nom'";
    $sql = "DELETE FROM salle WHERE nom_bat='$nom'";
    mysqli_query($c,$sql);
    mysqli_query($c,$sql1);
}

function afficher_salles($nom){
	global $c;
	$sql = "SELECT numero, Capacité, niveau FROM salle WHERE nom_bat = '$nom'";
	$resultat = mysqli_query($c, $sql);
	$row = mysqli_fetch_assoc($resultat);
	if ($row == NULL){
		echo 'Il ya aucunne salle';
	} else{
		salles($nom);
	}
}







function salle($num){
	global $c;
	$sql = " SELECT numero, Capacité, niveau, photo, nom_bat FROM salle WHERE numero = '$num'  ";
	$resultat = mysqli_query($c, $sql);
	
	while( $row = mysqli_fetch_assoc($resultat)){
		
		echo'
			<tr>

				<td class=tab> 
					<li>' . $row["numero"] . ' </li> 
				</td>
				<td class=tab> 
					<li><img src = "data:image/jpg;base64,' . base64_encode($row['photo']) . '" width = "50px" height = "50px"/></li>
				</td>
				<td class=tab>
					<li> '. $row["Capacité"] . ' </li> 
				</td>
				<td class=tab>
					<li>'. $row["niveau"] .'</li> 
			    </td>

			<tr>
			';
	}
	echo'
	</table>';

}


function afficher_salle($num){
	global $c;
	$sql = "SELECT numero, Capacité, niveau, photo, nom_bat FROM salle WHERE numero = '$num'";
	$resultat = mysqli_query($c, $sql);
	$row = mysqli_fetch_assoc($resultat);
	if ($row == NULL){
		echo 'Il ya aucunne salle';
	} else{
		salle($num);
	}
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
	
	while( $row = mysqli_fetch_assoc($resultat)){
		
		echo'
			<tr>

				<td class=tab> 
					<li>' . $row["numero"] . ' </li> 
				</td>
				<td class=tab> 
					<li><img src = "data:image/jpg;base64,' . base64_encode($row['photo']) . '" width = "50px" height = "50px"/></li>
				</td>
				<td class=tab>
					<li> '. $row["Capacité"] . ' </li> 
				</td>
				<td class=tab>
					<li>'. $row["niveau"] .'</li> 
			    </td>

			<tr>
			';
	}
	echo'
	</table>';

}


function afficher_salle($num){
	global $c;
	$sql = "SELECT numero, Capacité, niveau, photo, nom_bat FROM salle WHERE numero = '$num'";
	$resultat = mysqli_query($c, $sql);
	$row = mysqli_fetch_assoc($resultat);
	if ($row == NULL){
		echo 'Il ya aucunne salle';
	} else{
		salle($num);
	}
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