<?php session_start(); ?>
<?php include 'includeContent/doctypeHead.php'; ?>

<body>

<?php include 'includeContent/header.php'; ?>

<?php

    
    
    if (!isset($_SESSION["NickNameUser"]) || $_SESSION["NickNameUser"] == FALSE) {

        
        echo "<p> Vous devez être connecté pour modifier le catalogue de vins.</p>";
        echo "<p> Si vous ne l'êtes pas, inscrivez vous.</p>";
        
        include 'includeContent/formConnexionUser.php';
        include 'includeContent/formInscriptionUser.php';
    }
     
    else
    {        
        echo"
        <div class =\"FormCreateBottle\">";
        include 'includeContent/formCreateBottle.php';
        
        include 'includeContent/formUpdateDeleteBottle.php';
        echo"</div>";
    }

?>
    
    

    

        
    <?php include 'includeContent/footer.php'; ?>

</body>
</html>