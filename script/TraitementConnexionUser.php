<?php

require 'BDD.php';

if(isset($_POST['SelectUserNickname']) && isset($_POST['SelectUserEmail']) && isset($_POST['SelectUserPassword']) && !empty($_POST['SelectUserNickname']) && !empty($_POST['SelectUserEmail']) && !empty($_POST['SelectUserPassword']))
        
        {        

        $SelectUserEmailClean = filter_var(($_POST['SelectUserEmail']), FILTER_SANITIZE_SPECIAL_CHARS);
        $SelectUserPasswordClean = filter_var(($_POST['SelectUserPassword']), FILTER_SANITIZE_SPECIAL_CHARS);

        SelectUserBDD($SelectUserEmailClean);

        // travailler la sorti de donnée du tableaux user selectionné

        //comparer mdp taper et hash.
        if("miaou" == "miaou") {
            echo "miaou";//si c'est bon
        }

        else {
            echo "<script>";
            echo "alert('Identifiant ou mot de passe incorrect');";
            echo "location.href='../template/ModifCatalogue.php'";
            echo "</script>"; 
        }}
    
    else {

        echo "<script>";
        echo "alert('Il manque des informations');";
        echo "location.href='../template/ModifCatalogue.php'";
        echo "</script>";
    }

?>