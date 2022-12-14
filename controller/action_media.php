<?php 

//formulaire d'ajout de batiment

if (isset($_POST["action"]) && $_POST["action"] == "ajouter-bat") {
   if ((isset($_POST['Nom']) && $_POST['Nom'] != "") || (isset($_POST['adresse']) && $_POST['adresse'] != "") || (isset($_POST['nb_salle']) && $_POST['nb_salle'] != "")) {
      // if (isset($_SESSION['id'][0])) {
      //    $id = $_SESSION['id'][0];
      // }

      if (!existe_bat($_POST['Nom'])) {

         $_SESSION['Nom'] = $_POST['Nom'];
         if($_POST['nb_salle']>0){
            $nb_salle=$_POST['nb_salle']-1;
         }
         creer_bat($_POST['Nom'], $_POST['adresse'], $nb_salle, $_SESSION['id'][0]);
         $_SESSION['nb_salle']=$_POST['nb_salle'];
         if ($_SESSION['nb_salle']>0){
            header("Location: ./?page=ajout-salle");
         }else{
            header("Location: ./?page=liste-bat");
            echo 'vous avez creer un batiment';}

      }else{
         echo 'Batiment existe deja';
         } 
   }else {
         echo "info incorrect";
         // header("Location: ./?page=ajout-bat");
      }
   
   }


//formulaire de suppression de bat

if (isset($_POST["action"]) && $_POST["action"] == "supp") {

   $nom = $_SESSION['Nom']; // $id is now defined
   // var_dump($_SESSION['Nom']);
   supp_bat($nom);
   // echo "<p>votre bat a été supprimé.</p>";s
}

//formulaire de ajout de ressource

if (isset($_POST["action"]) && $_POST["action"] == "print") {
   $values = array($_SESSION["ressources"],$_POST['Ressources1']);
   $_SESSION['Ressources'] = $values;
}

//formulaire d'ajout de salles

if (isset($_POST["action"]) && $_POST["action"] == "Ajout_salle") {
   // if ((isset($_POST['num']) && $_POST['num'] != "") &&  (isset($_POST['Photo']) && $_POST['Photo'] != "") && (isset($_POST['Capacité']) && $_POST['Capacité'] != "") && (isset($_POST['Ressources']) && $_POST['Ressources'] != "") && (isset($_POST['niveau']) && $_POST['niveau'] != "") && (isset($_POST['Description']) && $_POST['Description'] != "")) {
      // if (isset($_SESSION['id'][0])) {
      //    $id = $_SESSION['id'][0];
      // }

      for ($i = 1; $i <= $_SESSION['nb_salle']; $i++) {
      // if (!existe_salle($_POST['num']), $_GET['nom_bat'])) {
         creer_salle($_POST["num$i"],$_POST["Photo$i"] ,$_POST["Capacité$i"] ,$_POST["Ressources$i"] ,$_POST["niveau$i"] ,$_POST["Description$i"] ,$_POST["nb_org$i"] ,$_SESSION['Nom']);
      }
         ajout_nb_salle($_SESSION['Nom']);
         // var_dump($_SESSION['nb_salle']);
         // if ($_SESSION['nb_salle']>0){
         //    while ($_SESSION['nb_salle'] > 0) {
               // header("Location: ./?page=ajout-salle");
               // $_SESSION['nb_salle']--;
               // var_dump($_SESSION['nb_salle']);
            // }
         // }else{
            $_SESSION['id_salle'] = $_GET['id_salle'];
            // $_SESSION['id_salle'] = $_GET['id_salle'];
            header("Location: ./?page=liste-bat");
         // }
      // }else{
      //    echo 'Salle existe deja';
      //    } 
   // }else {
         // echo "info incorrect";
         // header("Location: ./?page=ajout-bat");
      // }
   
   }

//formulaire de suppression de sal

if (isset($_POST["action"]) && $_POST["action"] == "sup-salle") {

   $id = $_SESSION['id_salle']; // $id is now defined
   supp_salle ($id);
   // echo "<p>votre bat a été supprimé.</p>";s
}




//formulaire de reservation de salle
$jours = array(1=>"Lundi",2=>"Mardi",3=>"Mercredi",4=>"Jeudi",5=>"Vendredi",6=>"Samedi",0=>"Dimanche");
if(isset($_GET['annee']) AND preg_match("#^[0-9]{4}$#",$_GET['annee'])){//si on souhaite afficher une autre année, on l'affiche si elle est correcte
    $annee=$_GET['annee'];
} else {
    $annee=date("Y");//si non, on affiche l'année actuelle
}
$NbrDeJour=[];
for($mois=1;$mois<=12;$mois++) {
    $NbrDeJour[$mois]=date("t",mktime(1,1,1,$mois,2,$annee));
    $PremierJourDuMois[$mois]=date("w",mktime(5,1,1,$mois,1,$annee));
}


	if(
	isset($_GET['jour']) AND preg_match("#^[0-9]{1,2}$#",$_GET['jour']) AND
	isset($_GET['mois']) AND preg_match("#^[0-9]{1,2}$#",$_GET['mois']) AND
	isset($_GET['choix']) AND preg_match("#^(0|1)$#",$_GET['choix'])) {
		if($_GET['choix']==1){
         $date= $annee."-".$_GET['mois']."-".$_GET['jour'];
			if(reserver( $date, $_SESSION['id_salle'],$_SESSION['id'][0])) {
				echo "Jour mise en \"réservé\" avec succès !";
			} 
		}else {
         $date= $annee."-".$_GET['mois']."-".$_GET['jour'];
		   if(supp_res($date,$_SESSION['id_salle'])) {
				echo "Journée mise en \"disponible\" avec succès !";
			} 
		}
	}

$StyleTh="text-shadow: 1px 1px 1px #000;color:white;width:75px;border-right:1px solid black;border-bottom:1px solid black;";