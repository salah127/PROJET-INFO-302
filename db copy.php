



<?php
session_start();

include_once "db.php";
include_once "model/model.php";
include_once "controller/controller.php";
include_once "view/view.php";





//formulaire d'ajout de batiment

if (isset($_POST["action"]) && $_POST["action"] == "ajouter-bat") {
   if ((isset($_POST['Nom']) && $_POST['Nom'] != "") || (isset($_POST['adresse']) && $_POST['adresse'] != "") || (isset($_POST['nb_salle']) && $_POST['nb_salle'] != "")) {

      if (!existe_bat($_POST['Nom'])) {
         if($_POST['Nom']<=0){
            $_SESSION['Nom'] = 1;
         }else{
            $_SESSION['Nom'] = $_POST['Nom'];
            creer_bat($_POST['Nom'], $_POST['adresse'], $_SESSION['Nom'], $_SESSION['id'][0]);
            $_SESSION['nb_salle']=$_POST['nb_salle'];}
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
      }
   }
   



//formulaire de suppression de bat

if (isset($_POST["action"]) && $_POST["action"] == "sup_bat") {

   $nom = $_SESSION['Nom'];
   supp_bat($nom);
}

//formulaire de ajout de ressource

if (isset($_POST["action"]) && $_POST["action"] == "ajout_ressource") {
   ajout_ressources($_POST['Ressource'],$_POST['quentite'],$_POST['qualite'],$_SESSION['id'][0],$_SESSION['id_salle']);
   $_SESSION['Ressources'] = $_POST['Ressource'];
   $salle = $_SESSION["id_salle"];
   if($_POST['qualite']<50) {
      ajout_pts ($_SESSION['id'][0],$_SESSION['point'],20);
      $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
      header("Location: ./?page=salle&id_salle=$salle");
}
   else if($_POST['qualite']==50) {
      ajout_pts ($_SESSION['id'][0],$_SESSION['point'],30);
      $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
      header("Location: ./?page=salle&id_salle=$salle");
}
   else  if($_POST['qualite']==100){
      ajout_pts ($_SESSION['id'][0],$_SESSION['point'],50);
      $_SESSION['point'] = recup_pts($_SESSION['id'][0]);
      header("Location: ./?page=salle&id_salle=$salle");
}
}


// formulaire de recherche
if (isset($_POST["action"]) && ( $_POST["action"] == "rech")) {
      $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
      header("location:./?page=rechercher&id_salle=".$recherche);
   }



   ?>
   <!DOCTYPE html>
   <html>
   
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="css\style.css" />
       <title>GoldenThing</title>
       <link rel="shortcut icon" href="icon-lieu.png" type="image/png">
   </head>
   
   <body>
       <div class="headiv">
           <table class="headt">
               <tr>
                   <td>
                       <h1 class="logo">
                           <a class="button1" href="index.php?page=home">
                               <action></action>
                           </a>
                       </h1>
                   </td>
                   <td class='BigListe'>
                       <form action="." method="post" class="menu">
                           <li><a class="button" href="index.php?page=recherche">Recherche</a></li>
                           <li><a class="button" href="index.php?page=ranking">Ranking</a></li>
                           <?php
                                   if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
                                       echo '
                                       <ul id="menu-inscrp">
                                           <li><a href="#" >Parametre</a>
                                               <ul class ="MenuInscrp MenuInscrp1">
                                                   <li ><a class="button" href ="index.php?page=profil">Profil</a></li>
                                                   <li ><a class="button" href ="index.php?page=aide">Aide</a></li>
                                                   <li ><a class="button" href ="index.php?connecte=false">Deconnexion</a></li>
                                               </ul>
                                           </li>
                                       </ul>
                                       ';
                                       if ($_SESSION["role"]=='internaute'){
                                           echo '
                                           <ul id="menu-inscrp">
                                               <li><a href="#" >Service</a>
                                                   <ul class ="MenuInscrp tab2">
                                                       <li ><a class="button" href ="?page=reservation">Reservation</a></li>
                                                       <li ><a class="button" href ="">Devenir-Pro</a></li>
                                                       <li ><a class="button" href ="">Favoris</a></li>
                                                   </ul>
                                               </li>
                                           </ul>
                                           ';
                                       }else{
                                           echo '
                                           <ul id="menu-inscrp">
                                               <li><a href="#" >Service</a>
                                                   <ul class ="MenuInscrp tab2">
                                                       <li ><a class="button" href ="index.php?page=liste-bat">Ajouter</a></li>
                                                       <li ><a class="button" href ="">Mes-Ajout</a></li>
                                                       <li ><a class="button" href ="">Favoris</a></li>
                                                   </ul>
                                               </li>
                                           </ul>';
                                       }
                                       echo '<li><a class="prof" href ="index.php?page=profil">'.$_SESSION['username'][0].'</a></li>';
                                   }else{
                                       echo ' 
                                           <ul  id="menu-inscrp">
                                               <li><a href="#" >Inscription</a>
                                                   <ul class ="MenuInscrp tab3">
                                                       <li><a href ="index.php?page=inscription">Internaute</a></li>
                                                       <li><a href="index.php?page=pro-insc">Proffesionnel</a></li>
                                                   </ul>       
                                               </li>     
                                           </ul>
                                           <ul >
                                               <li ><a class="button" href ="index.php?page=connexion">Connexion</a></li>
                                           </ul>';
                                   }
                                   ?>
                       </form>
                   </td>
               </tr>
           </table>
       </div>
   </body>




