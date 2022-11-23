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
	$sql = "INSERT INTO `batiment` (`id`, `Nom`, `adresse`, `nb_salle`, `id_pro`) VALUES (NULL, '$nom', '$adresse', '$nb_salle', '$id_pro');";
	mysqli_query($c, $sql);
}


function Afficher_bat($id){
	global $c;
	$sql = " SELECT Nom, adresse, nb_salle FROM batiment WHERE id_pro = ' $id '  ";
	$resultat = mysqli_query($c, $sql);

	// var_dump($resultat);
	echo'
	<table class=tab>
		<tr>
            <td class=tab>
				<li > 
					<strong>Nom</strong>
				</li>
			</td>
			<td class=tab>
			<li > 
			<strong>Adresse</strong>
		</li>
			</td>
			<td class=tab>
			<li > 
			<strong>Nembre de salle</strong>
		</li>
			</td>
		</tr>';
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
						<a class="button" href ="index.php?page=profil"> Afficher </a>
					</li> 
			    </td>

			<tr>
			';

		// echo "<strong>".$row["Nom"]."</strong>"."<br>";
		// echo $row["Nom"]."<br>";
	}
	echo'
	</table>';
	
	return $row;
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
