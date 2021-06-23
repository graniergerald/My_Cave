<?php

    function checkPicture()
    {

        
        $maxSize = 50000;
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
        $fileName = "../img/" . $uniqueName . $fileExt;
        $resultat = move_uploaded_file($tmpName, $fileName);
        $fileBDD = $uniqueName . $fileExt;
        
        if($resultat)
        
        {
            echo "<script>";
            echo "alert('Tu es un winneur !');";
            echo "location.href='../template/Accueil.php'";
            echo "</script>";
        }

        echo 'voici $fileBDD';
        var_dump($fileBDD);
        echo '</br>';

        echo 'voici $resultat';
        var_dump($resultat);
        echo '</br>';

        echo 'voici $fileName';
        var_dump($fileName);
        echo '</br>';

        echo 'voici $uniqueName';
        var_dump($uniqueName);
        echo '</br>';

        echo 'voici $files tableau';
        var_dump($_FILES['CreatePictureBottle']);
        echo '</br>';

        return $fileBDD;
    }
        
        
        
?>