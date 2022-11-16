<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>GoldenThing</title>
        <link rel="shortcut icon" href="icon-lieu.png" type="image/png">
    </head>
    <body>
        <header class = "AllOfIt">  
            <table>
                <tr>
                    <td>
                        <h1 class="logo">
                            <a class="button1" href ="index.php?page=home">
                                LeLocal
                            </a>
                        </h1>
                    </td>
                    <td>
                    <li class='BigListe'>
                        <form action = "." method = "post" class="menu">
                                <ul class="CreRank">
                                    <li ><a class="button" href ="index.php?page=creer">Créer post</a></li>
                                    <li ><a class="button" href ="index.php?page=ranking">Ranking</a></li>
                                </ul>
                                <?php
                                    if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
                                        echo '
                                        <ul class="ModCnxSup">
                                            <li ><a class="button2" href ="index.php?page=modifier">modifier</a></li>
                                            <li ><a class="button2" href ="index.php?connecte=false">Deconnexion</a></li>
                                            <li ><a class="button2" href ="index.php?page=supprimer">supprimer</a></li>
                                        </ul>';
                                    }
                                    else{
                                        if (isset($_SESSION["connecte"])) var_dump($_SESSION["connecte"]);
                                        echo ' 
                                        <ul class="account" id="menu-accordeon">
                                        <li><a class="button3" href =" index.php?page=connexion">Connexion</a></li>
                                            <li><a href="#" class="button3">Inscription</a>
                                                <ul class ="MenuInscrp">
                                                    <li><a href ="index.php?page=inscription">Internaute</a></li>
                                                    <li><a href="index.php?page=pro-insc">Proffesionnel</a></li>
                                                </ul>
                                            </li>
                                        </ul>';
                                    }
                                ?>
                        </form>
                        </li>
                    </td>
                </tr>
            </table>
        </header>
    </body>

