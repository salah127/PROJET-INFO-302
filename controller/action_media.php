<?php 

//formulaire d'ajout de batiment

if (isset($_POST["action"]) && $_POST["action"] == "ajouter-bat") {
   if ((isset($_POST['Nom']) && $_POST['Nom'] != "") || (isset($_POST['adresse']) && $_POST['adresse'] != "") || (isset($_POST['nb_salle']) && $_POST['nb_salle'] != "")) {
      // if (isset($_SESSION['id'][0])) {
      //    $id = $_SESSION['id'][0];
      // }

      if (!existe_bat($_POST['Nom'])) {

         $_SESSION['Nom'] = $_POST['Nom'];

         creer_bat($_POST['Nom'], $_POST['adresse'], $_POST['nb_salle'], $_SESSION['id'][0]);
      
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
   supp_bat($nom);
   // echo "<p>votre bat a été supprimé.</p>";s
}




//formulaire d'ajout de salles

if (isset($_POST["action"]) && $_POST["action"] == "Ajout_salle") {
   if ((isset($_POST['num']) && $_POST['num'] != "") ||  (isset($_POST['Photo']) && $_POST['Photo'] != "") || (isset($_POST['Capacité']) && $_POST['Capacité'] != "") || (isset($_POST['Ressources']) && $_POST['Ressources'] != "") || (isset($_POST['niveau']) && $_POST['niveau'] != "") || (isset($_POST['Description']) && $_POST['Description'] != "") || (isset($_POST['nb_org']) && $_POST['nb_org'] != "")) {
      // if (isset($_SESSION['id'][0])) {
      //    $id = $_SESSION['id'][0];
      // }

      // if (!existe_salle($_POST['num'])) {
         creer_salle($_POST['num'],$_POST['Photo'] ,$_POST['Capacité'] ,$_POST['Ressources'] ,$_POST['niveau'] ,$_POST['Description'] ,$_POST['nb_org'] ,$_SESSION['Nom']);
         ajout_nb_salle($_SESSION['Nom']);
         // var_dump($_SESSION['nb_salle']);
         // if ($_SESSION['nb_salle']>0){
         //    while ($_SESSION['nb_salle'] > 0) {
               // header("Location: ./?page=ajout-salle");
               // $_SESSION['nb_salle']--;
               // var_dump($_SESSION['nb_salle']);
            // }
         // }else{
            $_SESSION['numero'] = $_POST['numero'];
            header("Location: ./?page=liste-bat");
         // }
      // }else{
      //    echo 'Salle existe deja';
      //    } 
   }else {
         echo "info incorrect";
         // header("Location: ./?page=ajout-bat");
      }
   
   }


