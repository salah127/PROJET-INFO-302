<fieldset>
    <legend class='titleliste'>
        <h2>Connectez vous</h2>
    </legend>
    <form action="index.php" method="post">
        
        <div id="second">
            <div class="mom">
                <div id="first">
                    <label for="idpseudocnx">Pseudo :</label>
                </div>
                <input type="text" id="idpseudocnx" class="cnx-control" name="pseudo"
                    placeholder="entrer votre pseudo...">
            </div>
            <br>
            <div class="mom">
                <div id="first">
                    <label for="idpasscnx">Mot de passe :</label>
                </div>
                <input type="password" class="cnx-control" name="mdp" id="idpasscnx"
                    placeholder="entrer votre mot de passe...">
            </div>
        </div>
        <br>
        <input type="hidden" name="action" value="connexion">
        <input type="submit" class="cnx-sub" value="connexion">
    </form>
</fieldset>
<a href="?page=inscription" role="button">creer un compte internaute</a>
<br>
<a href="?page=pro-insc" role="button">creer un compte Proffesionnel</a>