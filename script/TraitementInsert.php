<?php

require "BDD.php";
require "InputFile.php";


if(isset($_POST['CreateNameBottle']) && isset($_POST['CreateYearBottle']) && isset($_POST['CreateGrapesBottle']) && isset($_POST['CreateCountryBottle']) && isset($_POST['CreateRegionBottle']) && isset($_POST['CreateDescriptionBottle']) && isset($_POST['CreatePictureBottle']) && !empty($_POST['CreateNameBottle']) && !empty($_POST['CreateYearBottle']) && !empty($_POST['CreateGrapesBottle']) && !empty($_POST['CreateCountryBottle']) && !empty($_POST['CreateRegionBottle']) && !empty($_POST['CreateDescriptionBottle']) && !empty($_POST['CreatePictureBottle'])) {


            
            $CreateNameBottleClean = filter_var(($_POST['CreateNameBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
            $CreateYearBottleClean = filter_var(($_POST['CreateYearBottle']), FILTER_SANITIZE_NUMBER_INT);
            $CreateGrapesBottleClean = filter_var(($_POST['CreateGrapesBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
            $CreateCountryBottleClean = filter_var(($_POST['CreateCountryBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
            $CreateRegionBottleClean = filter_var(($_POST['CreateRegionBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
            $CreateDescriptionBottleClean = filter_var(($_POST['CreateDescriptionBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
            $CreatePictureBottleClean = filter_var(($_POST['CreatePictureBottle']), FILTER_SANITIZE_SPECIAL_CHARS);

            // checkPicture();

        
            
            createBottleBDD($CreateNameBottleClean, $CreateYearBottleClean, $CreateGrapesBottleClean, $CreateCountryBottleClean, $CreateRegionBottleClean, $CreateDescriptionBottleClean, $CreatePictureBottleClean);

            echo "<script>";
            echo "alert('La bouteille de vin a bien été rajouté dans le catalogue');";
            //echo "location.href='../template/Accueil.php'";   ENLEVER PDT DEBUGAGE.
            echo "</script>";
        

    } else {
        echo 'Il manque des infos';
    }


?>