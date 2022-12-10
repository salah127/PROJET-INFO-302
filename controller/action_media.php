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

if (isset($_POST["action"]) && $_POST["action"] == "reserver") {
   // header("Location: ./?page=calendrier");
   // var_dump($_SESSION['id'][0]);
   $debut=$_SESSION["date"];
   $fin="2020-01-02 11:12:11";
   for ($i = 1; $i <= 7; $i++) {
      if($_SESSION["date$i"]=1){
         header("Location: ./?page=1");
      }if($_SESSION["date$i"]=2){
         header("Location: ./?page=2");
      }
      if($_SESSION["date$i"]=3){
         header("Location: ./?page=3");
      }
    }
  };

   
   // reserver( $_SESSION['id_salle'], $_SESSION['id'][0], $debut, $fin );
   
   // echo "<p>votre bat a été supprimé.</p>";s
