<form class="ConnexionUser" id="ConnexionUser" method="post" action="../script/TraitementConnexionUser.php">
        <legend> <h2>Se connecter :</h2></legend>
        <p>
            <label for="SelectUserNickname">Pseudo</label>
            <input type="text" name="SelectUserNickname" id="SelectUserNickname" maxlength="100" size="20" required>
        </p>
        
        <p>
            <label for="SelectUserEmail">Email</label>
            <input type="email" name="SelectUserEmail" id="SelectUserEmail" maxlength="100" size="22" required>
        </p>

        <p>
            <label for="SelectUserPassword">Mot de passe</label>
            <input type="password" name="SelectUserPassword" id="SelectUserPassword" maxlength="50" size="15" required>
        </p>

        <input type="submit" value="Se connecter">

</form>