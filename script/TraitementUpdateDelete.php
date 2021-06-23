<?php

require "BDD.php";

if (isset($_POST['InputMAJ'])) {


    if(isset($_POST['UpdateIdBottle']) && isset($_POST['UpdateNameBottle']) && isset($_POST['UpdateYearBottle']) && isset($_POST['UpdateGrapesBottle']) && isset($_POST['UpdateCountryBottle']) && isset($_POST['UpdateRegionBottle']) && isset($_POST['UpdateDescriptionBottle']) && isset($_POST['UpdatePictureBottle']) && !empty($_POST['UpdateIdBottle']) && !empty($_POST['UpdateNameBottle']) && !empty($_POST['UpdateYearBottle']) && !empty($_POST['UpdateGrapesBottle']) && !empty($_POST['UpdateCountryBottle']) && !empty($_POST['UpdateRegionBottle']) && !empty($_POST['UpdateDescriptionBottle']) && !empty($_POST['UpdatePictureBottle'])) {


            
        $UpdateIdBottleClean = filter_var(($_POST['UpdateIdBottle']), FILTER_SANITIZE_NUMBER_INT);
        $UpdateNameBottleClean = filter_var(($_POST['UpdateNameBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
        $UpdateYearBottleClean = filter_var(($_POST['UpdateYearBottle']), FILTER_SANITIZE_NUMBER_INT);
        $UpdateGrapesBottleClean = filter_var(($_POST['UpdateGrapesBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
        $UpdateCountryBottleClean = filter_var(($_POST['UpdateCountryBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
        $UpdateRegionBottleClean = filter_var(($_POST['UpdateRegionBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
        $UpdateDescriptionBottleClean = filter_var(($_POST['UpdateDescriptionBottle']), FILTER_SANITIZE_SPECIAL_CHARS);
        $UpdatePictureBottleClean = filter_var(($_POST['UpdatePictureBottle']), FILTER_SANITIZE_SPECIAL_CHARS);

        
        updateBottleBDD($UpdateIdBottleClean, $UpdateNameBottleClean, $UpdateYearBottleClean, $UpdateGrapesBottleClean, $UpdateCountryBottleClean, $UpdateRegionBottleClean, $UpdateDescriptionBottleClean, $UpdatePictureBottleClean);

        echo "<script>";
        echo "alert('La bouteille de vin a bien été mis à jour dans le catalogue');";
        echo "location.href='../template/Accueil.php'"; //#InsertBottle en fin de ref pour le scroll sur l'id.
        echo "</script>";
    }
    
    else {
    echo 'Il manque des infos';
};
}

if (isset($_POST['InputDELETE'])) {
    if(isset($_POST['UpdateIdBottle']) && !empty($_POST['UpdateIdBottle']))
    {
        $UpdateIdBottleClean = filter_var(($_POST['UpdateIdBottle']), FILTER_SANITIZE_NUMBER_INT);

        deleteBottleBDD($UpdateIdBottleClean);

        echo "<script>";
        echo "alert('La bouteille de vin a bien été supprimé du catalogue');";
        echo "location.href='../template/Accueil.php'"; //#InsertBottle en fin de ref pour le scroll sur l'id.
        echo "</script>";
    }

    else {
    echo 'Erreur Suppression du livre </br>';

}};

?>