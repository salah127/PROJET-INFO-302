<style>
html,
body {
    font-family: "Lucida Console", "Courier New", Monospace;
    height: 100%;
    scroll-behavior: smooth;
    position: relative;
    background-color: #181818;
    width: 100%;
}

header {
    font-family: "Lucida Console", "Courier New", Monospace;
    background: #181818;
    width: 100%;
    border-radius: 16px;
    position: relative;
    height: 25%;
    box-shadow: 1px 1px 15px #ff0052;
}

header table {
    font-family: "Lucida Console", "Courier New", Monospace;
    width: 100%;
    display: flex;
    position: relative;
    text-align: center;
}

.menu {
    font-family: "Lucida Console", "Courier New", Monospace;
    display: inherit;
    position: relative;
    justify-content: center;
    align-items: center;
    margin-left: 25%;
    margin-right: 25%;
    top: -3px;
}

.logo {
    font-family: "Lucida Console", "Courier New", Monospace;
    order: solid 3px #181818;
    color: white;
    transition: 0.3s;
    display: flex;
    text-decoration: none;
    cursor: pointer;
    position: relative;
    text-align: center;
    height: 60px;
    width: 200px;
    margin-right: -100px;
    top: -26px;
}

html body header table tbody tr td h1.logo a.button1 img {
    height: 100%;
    width: 100%;
    position: absolute;
    border: solid 2px #181818;
    border-radius: 16px;
    left: 5%;
    top: -18.25px;
}

.logo:hover {
    font-family: "Lucida Console", "Courier New", Monospace;
    display: flex;
    text-align: center;
    transition: 0.3s;
    text-decoration: none;
    cursor: pointer;
}

.button1 {
    font-family: "Lucida Console", "Courier New", Monospace;
    color: #ff0052;
    padding: 16px 32px;
    width: 50%;
    text-align: center;
    opacity: 0.6;
    transition: 0.3s;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    border-radius: 16px;
}

ul {
    font-family: "Lucida Console", "Courier New", Monospace;
    list-style-type: none;
}

li {
    font-family: "Lucida Console", "Courier New", Monospace;
    padding: 0px;
}

.button {
    font-family: "Lucida Console", "Courier New", Monospace;
    text-align: center;
    color: #ff0052;
    padding: 10px;
    font-size: 16px;
    text-decoration: none;
    cursor: pointer;
    border-radius: 16px;
    width: 50%;
    margin: 10px;
    box-shadow: 16px 14px 20px #0000008c;
}

.button:hover {
    font-family: "Lucida Console", "Courier New", Monospace;
    background-color: #181818;
    border: solid 2px #181818;
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 16px;
    opacity: 0.6;
    transition: 0.3s;
    text-decoration: none;
    cursor: pointer;
    border-radius: 16px;
    margin: 10px;
}

#menu-inscrp {
    font-family: "Lucida Console", "Courier New", Monospace;
    list-style: none;
    width: 50%;
}

#menu-inscrp ul {
    font-family: "Lucida Console", "Courier New", Monospace;
    list-style: none;
    text-align: left;
    display: block;
    position: absolute;
    width: 150px;
    margin-left: -59px;
    height: 150px;
}

#menu-inscrp li li {
    font-family: "Lucida Console", "Courier New", Monospace;
    max-height: 0;
    overflow: hidden;
    transition: all .5s;
    border-radius: 16px;
    margin: 1%;
    background-color: white;
}

#menu-inscrp a {
    font-family: "Lucida Console", "Courier New", Monospace;
    text-align: center;
    color: #ff0052;
    display: table;
    padding: 10px;
    font-size: 16px;
    text-decoration: none;
    cursor: pointer;
    border-radius: 16px;
    width: 50%;
    margin: 10px;
    box-shadow: 16px 14px 20px #0000008c;
}

#menu-inscrp ul li a,
#menu-inscrp li:hover li a {
    font-family: "Lucida Console", "Courier New", Monospace;
    background-color: #ffffff;
    margin: 1%;
    width: 82%;
    border: solid 3px #181818;
    border-radius: 16px;
}

#menu-inscrp ul li:hover {
    font-family: "Lucida Console", "Courier New", Monospace;
    background-color: #181818;
    color: white;
    text-align: center;
    opacity: 0.6;
    transition: 0.3s;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    border-radius: 16px;
}

#menu-inscrp li:hover li {
    font-family: "Lucida Console", "Courier New", Monospace;
    max-height: 100%;
    width: 100%;
}

@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(-360deg);
    }
}

ul li .nav {
    font-family: "Lucida Console", "Courier New", Monospace;
    margin-left: 30px;
    font-size: 0px;
}

footer {
    font-family: "Lucida Console", "Courier New", Monospace;
    position: fixed;
    top: 95%;
    text-align: center;
    padding-top: 3px;
    border-top: 3px solid #181818;
    width: 100%;
    color: rgb(0, 0, 0);
    margin: 1%;
}

.BigListe {
    font-family: "Lucida Console", "Courier New", Monospace;
    display: flex;
    align-items: center;
    width: -moz-available;
}

.CreRank {
    font-family: "Lucida Console", "Courier New", Monospace;
    display: flex;
    width: 50%;
}

.ModCnxSup {
    font-family: "Lucida Console", "Courier New", Monospace;
    display: flex;
}

.MenuInscrp {
    font-family: "Lucida Console", "Courier New", Monospace;
    display: flex;
}

.account {
    font-family: "Lucida Console", "Courier New", Monospace;
    display: flex;
    nav-right: 250px;
    width: 50%;
    margin-inline-start: 200px;
}

.service {
    font-family: "Lucida Console", "Courier New", Monospace;
    display: flex;
    nav-right: 250px;
    width: 50%;
}

.tab {
    font-family: "Lucida Console", "Courier New", Monospace;
    list-style: none;
    position: relative;
    border-radius: 16px;
    width: 100%;
}

.batima {
    font-family: "Lucida Console", "Courier New", Monospace;
    background-color: #ffffff;
    color: white;
    font-weight: bold;
    width: 50%;
    border-radius: 16px;
    border: solid 3px #181818;
    margin-left: 25%;
    margin-right: 25%;
}

.batdiv {
    font-family: "Lucida Console", "Courier New", Monospace;
    position: relative;
}

.batsghir {
    font-family: "Lucida Console", "Courier New", Monospace;
    position: relative;
    display: flex;
}

.salasghira {
    font-family: "Lucida Console", "Courier New", Monospace;
    color: #181818;
    font-weight: bold;
    width: 50%;
    position: relative;
    margin: 0;
    text-align: left;
}

.btnajoutsalle {
    font-family: "Lucida Console", "Courier New", Monospace;
    color: white;
    font-weight: bold;
    width: 100%;
    position: relative;
    margin: 0;
    text-align: left;
}

.cnx-sub {
    font-family: "Lucida Console", "Courier New", Monospace;
    border: solid 3px #181818;
    color: #181818;
    font-weight: bold;
    position: relative;
    padding: 1% 25%;
    text-align: center;
    border-radius: 16px;
    background-color: white;
}

.cnx-sub2 {
    font-family: "Lucida Console", "Courier New", Monospace;
    border: solid 3px #181818;
    color: #181818;
    font-weight: bold;
    position: relative;
    padding: 1% 25%;
    text-align: center;
    border-radius: 16px;
    background-color: white;
    margin-left: 15%;
    margin-right: 15%;
}

.cnx-sub:hover {
    font-family: "Lucida Console", "Courier New", Monospace;
    border: solid 3px white;
    color: white;
    font-weight: bold;
    position: relative;
    padding: 1% 25%;
    text-align: center;
    border-radius: 16px;
    background-color: #181818;
}

.cnx-sub2:hover {
    font-family: "Lucida Console", "Courier New", Monospace;
    border: solid 3px white;
    color: white;
    font-weight: bold;
    position: relative;
    padding: 1% 25%;
    text-align: center;
    border-radius: 16px;
    background-color: #181818;
}

.inputtype {
    font-family: "Lucida Console", "Courier New", Monospace;
    width: 100%;
    color: #181818;
    border: solid 2px #181818;
    border-radius: 16px;
    text-align: center;
}

.titleliste {
    font-family: "Lucida Console", "Courier New", Monospace;
    border: solid 3px #181818;
    color: #181818;
    font-weight: bold;
    width: 50%;
    position: relative;
    margin: 3%;
    text-align: center;
    border-radius: 16px;
    background-color: white;
}

.btnajoutsalle2 {
    font-family: "Lucida Console", "Courier New", Monospace;
    color: #181818;
    font-weight: bold;
    width: 100%;
}

.batima2 {
    font-family: "Lucida Console", "Courier New", Monospace;
    background-color: white;
    color: #f22222;
    font-weight: bold;
    width: 75%;
    border-radius: 16px;
    border: solid 3px #f22222;
    margin-left: 12.5%;
    margin-right: 12.5%;
    padding-bottom: 3%;
}

html body fieldset.batima2 form table.tab tbody tr td.tab {
    position: relative;
    height: 150px;
    width: 150px;
    justify-content: center;
    align-items: center;
    border-radius: 16px;
    text-align: center;
}

.salasghira2 {
    font-family: "Lucida Console", "Courier New", Monospace;
    color: #181818;
    font-weight: bold;
    width: 100%;
    position: relative;
    text-align: center;
}

h2 {
    color: black;
}

label {
    color: black;
}

strong {
    margin-left: auto;
    margin-right: auto;
    table-layout: fixed;
    border-collapse: collapse;
    z-index: 10;
    position: relative;
    color: white;
}

.card {
    position: relative;
    height: 150px;
    width: 100%;
    background: black;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    z-index: 1;
    border-radius: 16px;
    text-align: center;
}

.card::before {
    content: "";
    color: white;
    height: 275px;
    width: 275px;
    background: linear-gradient(90deg, red, blue);
    position: absolute;
    z-index: 2;
    animation: rotate 3.5s linear infinite;
}

@keyframes rotate {
    from {
        transform: rotateZ(0deg);
    }

    to {
        transform: rotateZ(360deg);
    }
}

.card::after {
    content: "";
    color: white;
    height: 140px;
    width: 150px;
    background: black;
    position: absolute;
    z-index: 2;
    border-radius: 16px;
}

.prof {
    font-family: "Lucida Console", "Courier New", Monospace;
    width: 50px;
    height: 50px;
    box-shadow: 16px 14px 20px #ff0052;
    border-radius: 180px;
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
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
    box-shadow: inset 1px 1px 20px #ff0052;
}
</style>