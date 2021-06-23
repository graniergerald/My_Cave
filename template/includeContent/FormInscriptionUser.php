<form class="InscriptionUser" id="InscriptionUser" method="post" action="../script/TraitementInscriptionUser.php">
        <legend> <h2>Inscrivez vous :</h2></legend>
        <p>
            <label for="CreateUserNickname">Pseudo</label>
            <input type="text" name="CreateUserNickname" id="CreateUserNickname" maxlength="100" size="20" required>
        </p>
        
        <p>
            <label for="CreateUserEmail">Email</label>
            <input type="email" name="CreateUserEmail" id="CreateUserEmail" maxlength="100" size="22" required>
        </p>

        <p>
            <label for="CreateUserPassword">Mot de passe</label>
            <input type="password" name="CreateUserPassword" id="CreateUserPassword" maxlength="50" size="15" required>
        </p>

        <p>
            <label for="CreateUserPasswordConfirm">Vérification Mot de passe</label>
            <input type="password" name="CreateUserPasswordConfirm" id="CreateUserPasswordConfirm" maxlength="50" size="5" required>
        </p>

        <input type="submit" value="Enregistrer">

</form>