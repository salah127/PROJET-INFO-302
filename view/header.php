<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>GoldenThing</title>
    <link rel="shortcut icon" href="icon-lieu.png" type="image/png">
</head>

<body>
    <header>
        <table>
            <tr>
                <td>
                    <h1 class="logo">
                        <a class="button1" href="index.php?page=home">
                            <!-- <img src="logo.png" type="image/png"></img> -->
                            <style>
                            .prof {
                                font-family: "Lucida Console", "Courier New", Monospace;
                                width: 50px;
                                height: 50px;
                                box-shadow: 16px 14px 20px #0000008c;
                                border-radius: 180px;
                                position: relative;
                                overflow: hidden;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                right: 75%;
                                color: #ff0052;
                                text-decoration: none;
                                text-transform: uppercase;
                            }

                            .prof::before {
                                background-image: conic-gradient(#ff0052 20deg,
                                        transparent 120deg);
                                width: 150%;
                                height: 150%;
                                position: absolute;
                                animation: rotate 2s linear infinite;
                            }

                            .prof::after {
                                width: 40px;
                                height: 40px;
                                background: #101010;
                                position: absolute;
                                border-radius: 10px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                color: #ff0052;
                                font-size: larger;
                                letter-spacing: 5px;
                                box-shadow: inset 20px 20px 20px #0000008c;
                            }

                            div {
                                width: 200px;
                                height: 80px;
                                box-shadow: 16px 14px 20px #0000008c;
                                border-radius: 10px;
                                position: relative;
                                overflow: hidden;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                font-size: 16px;
                            }

                            div::before {
                                content: "";
                                background-image: conic-gradient(#ff0052 20deg,
                                        transparent 120deg);
                                width: 250%;
                                height: 250%;
                                position: absolute;
                                /* -webkit-animation: rotate 2s linear infinite; */
                                animation: rotate 2s linear infinite;
                            }

                            div::after {
                                content: 'Le Bon Choix';
                                width: 190px;
                                height: 70px;
                                background: #101010;
                                position: absolute;
                                border-radius: 10px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                color: #ff0052;
                                font-size: larger;
                                letter-spacing: 5px;
                                box-shadow: inset 20px 20px 20px #0000008c;
                            }

                            @keyframes rotate {
                                0% {
                                    transform: rotate(0deg);
                                }

                                100% {
                                    transform: rotate(-360deg);
                                }
                            }
                            </style>
                            <div></div>
                        </a>
                    </h1>
                </td>
                <td>
                    <li class='BigListe'>
                        <form action="." method="post" class="menu">
                            <ul class="CreRank">
                                <li><a class="button" href="index.php?page=">Recherche</a></li>
                                <li><a class="button" href="index.php?page=ranking">Ranking</a></li>
                            </ul>
                            <?php
                                    if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
                                        echo '
                                        <ul class="account" id="menu-inscrp">
                                            <li><a href="#" >Parametre</a>
                                                <ul class ="MenuInscrp">
                                                    <li ><a class="button" href ="index.php?page=profil">Profil</a></li>
                                                    <li ><a class="button" href ="index.php?page=aide">Aide</a></li>
                                                    <li ><a class="button" href ="index.php?connecte=false">Deconnexion</a></li>
                                                </ul>
                                            </li>
                                        </ul>';
                                        if ($_SESSION["role"]=='internaute'){
                                            echo '
                                            <ul class="service" id="menu-inscrp">
                                            <li><a href="#" >Service</a>
                                                <ul>
                                                    <li ><a class="button" href ="">Reservation</a></li>
                                                    <li ><a class="button" href ="">Devenir-Pro</a></li>
                                                    <li ><a class="button" href ="">Favoris</a></li>
                                                </ul>
                                            </li>
                                            </ul>
                                            <ul>
                                                <li><a class="prof" href ="index.php?page=profil"><nav>'. $_SESSION['username'][0] . '</nav></a><nav class = "nav">'. $_SESSION['role'] . ':'. $_SESSION['point'] . '</nav></li>
                                            </ul>';
                                        }
                                        else{
                                            echo '
                                            <ul class="service" id="menu-inscrp">
                                            <li><a href="#" >Service</a>
                                                <ul>
                                                    <li ><a class="button" href ="index.php?page=liste-bat">Ajouter</a></li>
                                                    <li ><a class="button" href ="">Mes-Ajout</a></li>
                                                    <li ><a class="button" href ="">Favoris</a></li>
                                                </ul>
                                                
                                            </li>
                                            </ul>
                                            <ul>
                                                <ul>
                                                    <li ><a class="prof" href ="index.php?page=profil"><nav>'. $_SESSION['username'][0] . '</nav></a><nav class = "nav">' . $_SESSION['role'] . '</nav></li>
                                                </ul>';
                                        }
                                    }
                                    else{
                                        if (isset($_SESSION["connecte"])) var_dump($_SESSION["connecte"]);
                                        echo ' 
                                        <ul class="account" id="menu-inscrp">
                                        
                                            <li><a href="#" >Inscription</a>
                                                <ul class ="MenuInscrp">
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
                    </li>
                </td>
            </tr>
        </table>
    </header>
</body>