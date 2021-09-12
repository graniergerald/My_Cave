<?php

require "bdd.php";


if($_POST['CreateUserPassword'] !== $_POST['CreateUserPasswordConfirm'] )

    {
        echo "<script>";
        echo "alert('Les 2 mots de passes sont différents !');";
        echo "location.href='../template/accueil.php'";
        echo "</script>"; 
    }

    else {

        if(isset($_POST['CreateUserNickname']) && isset($_POST['CreateUserEmail']) && isset($_POST['CreateUserPassword']) && !empty($_POST['CreateUserNickname']) && !empty($_POST['CreateUserEmail']) && !empty($_POST['CreateUserPassword']))
        
        {        

        $CreateUserNicknameClean = filter_var(($_POST['CreateUserNickname']), FILTER_SANITIZE_SPECIAL_CHARS);
        $CreateUserEmailClean = filter_var(($_POST['CreateUserEmail']), FILTER_SANITIZE_SPECIAL_CHARS);
        $CreateUserPasswordClean = filter_var(($_POST['CreateUserPassword']), FILTER_SANITIZE_SPECIAL_CHARS);
        
        
        $PasswordHash = password_hash( $CreateUserPasswordClean, PASSWORD_DEFAULT);

        
        createUserBDD($CreateUserNicknameClean, $CreateUserEmailClean, $PasswordHash);
        
        echo "<script>";
        echo "alert('L\'utilisateur est maintenant inscrit');";
        echo "location.href='../template/modifCatalogue.php'";
        echo "</script>";
        
        
        } else {
        echo "<script>";
        echo "alert('Il manque des informations !');";
        echo "location.href='../template/accueil.php'";
        echo "</script>"; 
    
}}


?>