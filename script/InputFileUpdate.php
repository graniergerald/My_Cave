<?php

//////////////UpdateFile/////////////////
/////////////////////////////////////////


function checkPictureUpdate()
    {

        
        $maxSize = 50000000; 
        $validExt = array('.jpg', '.jpeg', '.gif', '.png');
        
        if($_FILES['UpdatePictureBottle']['error'] > 0 && $_FILES['UpdatePictureBottle']['error'] !== 4 )
        {
            echo "<script>";
            echo "alert('Une erreur est survenu lors du téléchargement');";
            echo "location.href='../template/accueil.php'";
            echo "</script>";
        }

        elseif ($_FILES['UpdatePictureBottle']['error'] == 4) 
        {
            $file_exists = FALSE;
            $set_request = TRUE;
        }

        else{$file_exists = TRUE;} 
        
        $fileSize = $_FILES['UpdatePictureBottle']['size'];
        
        if($fileSize > $maxSize)
        {
            echo "<script>";
            echo "alert('Le fichier est trop volumineux');";
            echo "location.href='../template/accueil.php'";
            echo "</script>";
        }
        
        $fileName = $_FILES['UpdatePictureBottle']['name'];
        $fileExt = "." . strtolower(substr(strrchr($fileName, '.'), 1));
        
        if(!in_array($fileExt, $validExt))
        {
            echo "<script>";
            echo "alert('Le fichier n'est pas une image !');";
            echo "location.href='../template/accueil.php'";
            echo "</script>";
        }
        
        $tmpName = $_FILES['UpdatePictureBottle']['tmp_name'];
        $uniqueName = uniqid() . '_' . $_FILES['UpdatePictureBottle']['name'];
        $fileName = "../img/" . $uniqueName;
        $resultat = move_uploaded_file($_FILES['UpdatePictureBottle']['tmp_name'], $fileName);

        return $uniqueName;
        
    }
        
        $PictureUpdate = checkPictureUpdate();


?>