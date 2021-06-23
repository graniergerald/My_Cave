<?php

function ReadCardBottles($NomArray){
    $i = 1;
    echo '
    <div class="ContainerReadBottles">
    ';
    foreach($NomArray as $key=>$value) {
        echo '<div class="CardsBottles">';
        foreach($value as $keyb=>$valueb) {

            switch ($keyb) {
                case "name":
                    echo "<h2> $valueb </h2>";
                    break;
                case "year":
                    echo "<p>Année : $valueb </p>";
                    break;
                case "grapes":
                    echo "<p>Sépage : $valueb </p>";
                    break;
                case "country":
                    echo "<p>Pays : $valueb </p>";
                    break;
                case "region":
                    echo "<p>Region : $valueb </p>";
                    break;
                case "description":
                    echo "<p>Description : $valueb</p>";
                    break;
                case "picture":
                    echo "<div class =\"DivCardImg\">
                    <img class=\"img-card\"
                    src=\"../img/lurton-pinot-gris.jpg\"
                    alt=\"\">
                    </div>";
                    break;
            }
        }
        echo '</div>';  
    }

    echo '</div>';
}


function selectBottleForm ($NomArray) {
    
    echo '<form class ="SelectSelectBottle" method="GET" action="">
            <label for="BottleSelect"><h2>Selectionner un livre à modifier:</h2></label>
            <select name="BottleSelect" id="BottleSelect">
            <option value="0">Please choose a bottle to update</option>';

    // selectionner l'id ici pour inserer après dans value//
    foreach($NomArray as $key=>$value) 
    {   foreach($value as $keyb=>$valueb) 
        {
    
        if ($keyb == "id") {
        $idBottle = $valueb;
    }
    elseif ($keyb == "name") {

        echo '<option value="'.$idBottle.'">'.$valueb.'</option>';
    }
    }
    }


    echo    '<input type="submit" id="SelectBook" value="Selectionner ce livre">
             </select>
        </form>';
};



function FormUpdateDeleteBottle() {
   
    //On recup les données selectionné de : function selectBDD
    if(isset($_GET['BottleSelect'])) {    
        
        $id = $_GET['BottleSelect'];

        if( $id == 0) {
            echo '<p class="InsertBottle">Erreur, vous n\'avez pas selectionné de bouteille.</p>';
        }

        else {

        
        $bottle = readBottlesIDBDD($id);
        
        echo '<form class="InsertBottle" method="post" action="../script/TraitementUpdateDelete.php"> <legend> <h2>Mettre à jour / Supprimer une bouteille de vin :</h2></legend>';
        //on affiche le tableaux selectioné en fonction de ce qui est sélectionné ( id )
        foreach($bottle as $key=>$value) {

                    // Pour afficher l'id du livre mais empecher sa modification
                    switch($key){
                        case "id":
                        echo 'L\'id du vin est le numéro ' .$value ;

                        echo '
                        <p>
                        <label for="UpdateIdBottle"></label>
                        <input type="hidden" name="UpdateIdBottle" id="UpdateIdBottle" maxlength="250" size="30" value="'.$value.'" required>
                        </p>';
                        break;
    
                        case 'name':
                        echo '
                        <p>
                        <label for="UpdateNameBottle">Name</label>
                        <input type="text" name="UpdateNameBottle" id="UpdateNameBottle" maxlength="250" size="30" value="'.$value.'" required>
                        </p>';
                        break; 
                
                        case 'year':
                        echo '
                        <p>
                        <label for="UpdateYearBottle">Year</label>
                        <input type="number" name="UpdateYearBottle" id="UpdateYearBottle" maxlength="250" size="30" value="'.$value.'" required>
                        </p>';
                        break;

                        case 'grapes':
                        echo '
                        <p>
                        <label for="UpdateGrapesBottle">Grapes</label>
                        <input type="text" name="UpdateGrapesBottle" id="UpdateGrapesBottle" maxlength="250" size="30" value="'.$value.'" required>
                        </p>';
                        break;

                        case 'country':
                            echo '
                        <p>
                        <label for="UpdateCountryBottle">Country</label>
                        <input type="text" name="UpdateCountryBottle" id="UpdateCountryBottle" maxlength="250" size="30" value="'.$value.'" required>
                        </p>';
                        break;

                        case 'region':
                            echo '
                        <p>
                        <label for="UpdateRegionBottle">Region</label>
                        <input type="text" name="UpdateRegionBottle" id="UpdateRegionBottle" maxlength="250" size="30" value="'.$value.'" required>
                        </p>';
                        break;

                        case 'description':
                            echo '
                        <p>
                        <label for="UpdateDescriptionBottle">Description</label>
                        <input type="text" name="UpdateDescriptionBottle" id="UpdateDescriptionBottle" maxlength="250" size="30" value="'.$value.'" required>
                        </p>';
                        break;

                        case 'picture':
                            echo '
                        <p>
                        <label for="UpdatePictureBottle">Picture</label>
                        <input type="text" name="UpdatePictureBottle" id="UpdatePictureBottle" maxlength="250" size="30" value="'.$value.'" required>
                        </p>';
                        break;
                        //elseif pour faire un input de type file pour le fichier image :) . 
                        //Non fonctionnel à cause du Required au début puis après je me rend compte que la value de base n'est pas pris en compte lors du submit
                        // elseif($key == 'image'){
                        //     echo '
                        //     <p>
                        //     <label for="Update' .$key. 'Bottle_n°'.$id.'">'.$key. ': l\'image stocké est : ' .$value. '</label>
                        //     <input type="file" name="Update' .$key. 'Bottle_n°'.$id.'" id="Update' .$key. 'Bottle_n°'.$id.'" maxlength="250" size="30" value="'.$value.'">
                        //     </p>';
                        // }
                        //else pour faire un input classique de type text
                    }
                }
                
                echo '<input type="submit" id="InputMAJ" name="InputMAJ" value="Mettre à jour">';
                echo '<input type="submit" id="InputDELETE" name="InputDELETE" value="Supprimer">';
                echo '</form>';
            }
    }
            
};



?>