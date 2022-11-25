<?php 

//formulaire d'ajout de batiment

if (isset($_POST["action"]) && $_POST["action"] == "ajouter-bat") {
   if ((isset($_POST['Nom']) && $_POST['Nom'] != "")  (isset($_POST['adresse']) && $_POST['adresse'] != "")  (isset($_POST['nb_salle']) && $_POST['nb_salle'] != "")) {
      // if (isset($_SESSION['id'][0])) {
      //    $id = $_SESSION['id'][0];
      // }

      if (!existe_bat($_POST['Nom'])) {
         $_SESSION['Nom'] = $_POST['Nom'];
         creer_bat($_POST['Nom'], $_POST['adresse'], $_POST['nb_salle'], $id);
      
         $nb=$_POST['nb_salle'];
         if ($nb>0){
            while ($nb != 0) {
               header("Location: ./?page=ajout-salle");
               $nb--;
            }
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



// //formulaire d'ajout de batiment

// if (isset($_POST["action"])) {
//       if (!existe_bat($_POST['Nom'])) {
//          $_SESSION['Nom'] = $_POST['Nom'];

//       creer_bat($_POST['Nom'], $_POST['adresse'], $_POST['nb_salle'], $id);
//       if ($_POST['nb_salle']>0){

//          for ($x = 0; $x < $_POST['nb_salle']; $x++) {
//             header("Location: ./?page=ajout_salle");
//           }

//       }else{
//          header("Location: ./?page=liste-bat");
//          echo 'vous avez creer un batiment';}
//       } else {
//          // echo " Nom de batiment existant" ;
//          echo '<script>alert("Nom de batiment existant")</script>';
//       }
//    }else {
//          echo "info incorrect";
//          // header("Location: ./?page=ajout-bat");
//       } 