<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>TITRE</title>
    <link rel="shortcut icon" href="icon-lieu.png" type="image/png">
</head>

<body>
<header>
    
<table>
    <tr>
        <td>
            <h1 class="logo">
                <a class="button1" href ="index.php?page=home">
                <!-- <img class="img" src= LeLocal.png type="image/png" ></img> -->
                LeLocal
                </a>
            </h1>
        </td>
        <td>
            <form action = "." method = "post" class="menu">
                <!-- <input type="hidden" name="action" value="rech"> -->
                <!-- <input type="seach" name="valrecherche" placeholder="rechercher un media ..." class="cnx-control" id="barrech"> 
                <button class="rch-sub"><i class="fas fa-search"></i></button> -->
                <li ><a class="button" href ="index.php?page=creer">Créer post</a></li>
                <li ><a class="button" href ="index.php?page=ranking">Ranking</a></li>
                
                <!-- <li ><a class="button" href ="index.php?page=inscription">Inscription</a></li> -->
                <?php

                if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
                //var_dump($_SESSION["connecte"]);
                echo '<li ><a class="button2" href ="index.php?page=modifier">modifier</a></li>';
                echo '<li ><a class="button2" href ="index.php?connecte=false">Deconnexion</a></li>';
                echo '<li ><a class="button2" href ="index.php?page=supprimer">supprimer</a></li>';
                // header("location:index.php?page=home");

                }
                else  {
                if (isset($_SESSION["connecte"])) var_dump($_SESSION["connecte"]);

                echo
                '
                <ul id="menu-accordeon">
                    <li><a href="#" class="button3">Inscription</a>
                        <ul>
                            <li><a href ="index.php?page=inscription">Internaute</a></li>
                            <li><a href="index.php?page=pro-insc">Proffesionnel</a></li>
                        </ul>
                    </li>
                </ul>'
                ;

                
                // echo'
                // <li id="accordeon"><a class="button" href ="index.php?page=inscription">Inscription</a>
                // <ul>
                //             <li><a href="#" >normle</a></li>
                // </ul>
                // </li>
                // ';
                echo'<li ><a class="button3" href =" index.php?page=connexion">Connexion</a></li> ';
                
                    }
                ?>
            </form>
        </td>
    </tr>
</table>
</header>

