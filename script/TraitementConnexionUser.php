<?php

require 'BDD.php';

if(isset($_POST['SelectUserNickname']) && isset($_POST['SelectUserEmail']) && isset($_POST['SelectUserPassword']) && !empty($_POST['SelectUserNickname']) && !empty($_POST['SelectUserEmail']) && !empty($_POST['SelectUserPassword']))
        
        {        

        $SelectUserEmailClean = filter_var(($_POST['SelectUserEmail']), FILTER_SANITIZE_SPECIAL_CHARS);
        $SelectUserPasswordClean = filter_var(($_POST['SelectUserPassword']), FILTER_SANITIZE_SPECIAL_CHARS);

        $PasswordUserBDD = SelectUserBDD($SelectUserEmailClean);
        

        //comparer mdp taper et hash.
        if(password_verify($SelectUserPasswordClean, $PasswordUserBDD['password']))
        {
            echo "<script>";
            echo "alert('Connexion Reussi');";
            echo "location.href='../template/ModifCatalogue.php'";
            echo "</script>";

            session_start();
            $_SESSION['NickNameUser'] = $_POST['SelectUserNickname'];
        }

        else {
            echo "<script>";
            echo "alert('Identifiant ou mot de passe incorrect');";
            echo "location.href='../template/ModifCatalogue.php'";
            echo "</script>"; 
        }}

?>