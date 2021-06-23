<?php

function Connexion(&$conn) {
    
    $servername= 'localhost';
    $bdname= 'my_cave';
    $username= 'root';
    $password='root';
    //on try de se connecter
    try {
        
        $conn = new PDO("mysql:host=$servername;dbname=$bdname",$username, $password);
        // on définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // On met ceci en commentaire, on sais maintenant que le lien avec le base de donnée ce fait bien. echo "Connexion à la base de donnée reussi. ";
        // echo "Connexion reussi";
        
    }
    //On capture les exceptions si une exception est lancée et on affiche *les informations relatives à celle-ci*/
    
    catch(PDOException $e) {
        echo "Erreur :" .$e->getMessage();
        
    }
};


//////////////////////  BOTTLE   ////////////////////////////
///////////////////////////////////////////////////////////


function createBottleBDD($CreateNameBottle, $CreateYearBottle, $CreateGrapesBottle, $CreateCountryBottle, $CreateRegionBottle, $CreateDescriptionBottle, $CreatePictureBottle)
{
    $dbco;
    
    Connexion($dbco);

    try {

    //on prépare la requête 
    $req = $dbco->prepare("INSERT INTO bottles(name, year, grapes, country, region, description, picture) 
    VALUES(:name, :year, :grapes, :country, :region, :description, :picture)");

    $req->bindValue(':name', $CreateNameBottle);
    $req->bindValue(':year', $CreateYearBottle);
    $req->bindValue(':grapes', $CreateGrapesBottle);
    $req->bindValue(':country', $CreateCountryBottle);
    $req->bindValue(':region', $CreateRegionBottle);
    $req->bindValue(':description', $CreateDescriptionBottle);
    $req->bindValue(':picture', $CreatePictureBottle);
    $req->execute();

    
    }
    catch (PDOException $e){
        echo "Erreur :" .$e->getMessage();

    }
}

function readAllBottlesBDD()
    {
        $dbco;
    
        Connexion($dbco);

        try {

            //on prépare la requête 
            $req = $dbco->prepare('SELECT * FROM bottles ORDER BY id desc');
            $req->execute();

            $dataReadAllBottles = $req->fetchAll(PDO::FETCH_ASSOC);

            return $dataReadAllBottles;

            $req->closeCursor();
        }
        catch (PDOException $e){
            echo "Erreur :" .$e->getMessage();
    
        }
    }

    $dataReadAllBottles = readAllBottlesBDD();

function readBottlesIDBDD(int $id){

    $dbco;
    
        Connexion($dbco);

        try {

            //on prépare la requête 
            $req = $dbco->prepare("SELECT * FROM bottles WHERE id=:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();

            $dataReadBottleByID = $req->fetch(PDO::FETCH_ASSOC);

            return $dataReadBottleByID;

    
        }
        catch (PDOException $e){
            echo "Erreur :" .$e->getMessage();
    
        }

};


function updateBottleBDD($UpdateIdBottleClean, $UpdateNameBottleClean, $UpdateYearBottleClean, $UpdateGrapesBottleClean, $UpdateCountryBottleClean, $UpdateRegionBottleClean, $UpdateDescriptionBottleClean, $UpdatePictureBottleClean)
{
    $dbco;
    
    Connexion($dbco);

    try {

    //on prépare la requête 
    $req = $dbco->prepare("UPDATE bottles SET name = :name, year = :year, grapes = :grapes, country = :country, region = :region, description = :description, picture = :picture WHERE id = :id");

    $req->bindValue(':id', $UpdateIdBottleClean, PDO::PARAM_INT);   
    $req->bindValue(':name', $UpdateNameBottleClean, PDO::PARAM_STR);   
    $req->bindValue(':year', $UpdateYearBottleClean, PDO::PARAM_INT);   
    $req->bindValue(':grapes', $UpdateGrapesBottleClean, PDO::PARAM_STR);   
    $req->bindValue(':country', $UpdateCountryBottleClean, PDO::PARAM_STR);   
    $req->bindValue(':region', $UpdateRegionBottleClean, PDO::PARAM_STR);   
    $req->bindValue(':description', $UpdateDescriptionBottleClean, PDO::PARAM_STR);
    $req->bindValue(':picture', $UpdatePictureBottleClean, PDO::PARAM_STR);
    $req->execute();

    
    }
    catch (PDOException $e){
        echo "Erreur :" .$e->getMessage();

    }
}


function deleteBottleBDD($UpdateIdBottleClean)
{
    $dbco;
    
    Connexion($dbco);

    try {

    //on prépare la requête 
    $req = $dbco->prepare("DELETE FROM bottles WHERE id = :id");

    $req->bindValue(':id', $UpdateIdBottleClean, PDO::PARAM_INT);   
    $req->execute();

    
    }
    catch (PDOException $e){
        echo "Erreur :" .$e->getMessage();

    }
};

//////////////////////  USER   ////////////////////////////
///////////////////////////////////////////////////////////

function createUserBDD($CreatePseudoUser, $CreatePasswordUser, $CreateEmailUser)
{
    $dbco;
    
    Connexion($dbco);

    try {

    //on prépare la requête 
    $req = $dbco->prepare("INSERT INTO users(pseudo, email, password) 
    VALUES(:pseudo, :email, :password)");

    $req->bindValue(':pseudo', $CreatePseudoUser);
    $req->bindValue(':email', $CreatePasswordUser);
    $req->bindValue(':password', $CreateEmailUser);
    $req->execute();

    
    }
    catch (PDOException $e){
        echo "Erreur :" .$e->getMessage();

    }
}

function SelectUserBDD(string $EmailUser){

    $dbco;
    
        Connexion($dbco);

        try {

            //on prépare la requête 
            $req = $dbco->prepare("SELECT * FROM users WHERE email=:email");
            $req->bindValue(':email', $$EmailUser, PDO::PARAM_STR);
            $req->execute();

            $SelectUser = $req->fetch(PDO::FETCH_ASSOC);

            return $SelectUser;

    
        }
        catch (PDOException $e){
            echo "Erreur :" .$e->getMessage();
    
        }

};


?>