<?php session_start(); ?>
<?php include 'includeContent/DoctypeHead.php'; ?>

<body>

<?php include 'includeContent/Header.php'; ?>

<?php

    
    
    if (!isset($_SESSION["NickNameUser"]) || $_SESSION["NickNameUser"] == FALSE) {

        
        echo "<p> Vous devez être connecté pour modifier le catalogue de vins.</p>";
        echo "<p> Si vous ne l'êtes pas, inscrivez vous.</p>";
        
        include 'includeContent/FormConnexionUser.php';
        include 'includeContent/FormInscriptionUser.php';
    }
     
    else
    {        
        echo"
        <div class =\"FormCreateBottle\">";
        include 'includeContent/FormCreateBottle.php';
        
        include 'includeContent/FormUpdateDeleteBottle.php';
        echo"</div>";
    }

?>
    
    

    

        
    <?php include 'includeContent/Footer.php'; ?>

</body>
</html>