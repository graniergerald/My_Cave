<?php


    //////////////InsertFile/////////////////
    /////////////////////////////////////////


    function checkPictureInsert()
    {

        
        $maxSize = 50000000; 
        $validExt = array('.jpg', '.jpeg', '.gif', '.png');
        
        if($_FILES['CreatePictureBottle']['error'] > 0)
        {
            echo "<script>";
            echo "alert('Une erreur est survenu lors du téléchargement');";
            echo "location.href='../template/Accueil.php'";
            echo "</script>";
        }
        
        $fileSize = $_FILES['CreatePictureBottle']['size'];
        
        if($fileSize > $maxSize)
        {
            echo "<script>";
            echo "alert('Le fichier est trop volumineux');";
            echo "location.href='../template/Accueil.php'";
            echo "</script>";
        }
        
        $fileName = $_FILES['CreatePictureBottle']['name'];
        $fileExt = "." . strtolower(substr(strrchr($fileName, '.'), 1));
        
        if(!in_array($fileExt, $validExt))
        {
            echo "<script>";
            echo "alert('Le fichier n'est pas une image !');";
            echo "location.href='../template/Accueil.php'";
            echo "</script>";
        }
        
        $tmpName = $_FILES['CreatePictureBottle']['tmp_name'];
        $uniqueName = uniqid() . '_' . $_FILES['CreatePictureBottle']['name'];
        $fileName = "../img/" . $uniqueName;
        $resultat = move_uploaded_file($_FILES['CreatePictureBottle']['tmp_name'], $fileName);

        return $uniqueName;
    }
        
        $PictureInsert = checkPictureInsert();







        
?>