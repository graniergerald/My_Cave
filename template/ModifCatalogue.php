<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Cave - Modifier le catalogue</title>
        <meta name="description" content="My Cave, Cave à vin à Audenge.">
        <meta name=”robots” content="index, follow">
        <link rel="icon" href="../img/Fav_Icon.png"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>My Cave</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HXL0YN1RMX"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HXL0YN1RMX');
        </script>
        <?php include "../script/Main.php"; ?>
        <script src="../js/index.js" defer ></script>
    </head>

<body>

<?php include 'includeContent/header.php'; ?>

<div class="premiereSectionAccueil">
    <div class="imgCatalogue">
        
    </div>
    <div class="presentation">
        <div class="presAccroche">
            <h3></h3>
            <h1>Modification du catalogue</h1>
            <p>Voici la page pour modifier le catalogue de votre cave.</p>
            <p>Cette page est réservée aux personnes ayant un compte (employés de MyCave).</p>
        </div>
        <div class="contactadresseAccueil">
            <div class="contactAccueil">
                <h4>Contact</h4>
                <p><a href="tel:05 56 XX XX XX">05 56 XX XX XX</a></p>
                <p><a href="mailto:granier.joël@XXXXX.com">granier.joël@XXXXX.com</a></p>
            </div>

            <div class="adresseAccueil">
                <h4>Adresse</h4>
                <p><a href="https://www.google.com/maps/place/33+Rue+Daniel+Digneaux,+33980+Audenge/@44.688701,-1.0062289,17z/data=!3m1!4b1!4m5!3m4!1s0xd5496230db93ca5:0x5c4d0608fd6b1d90!8m2!3d44.6886972!4d-1.0040402" target="_blank">33 Rue Daniel Digneaux</br>Audenge 33980</a></p>
            </div>
        </div>
        <div class="reseauxSociauxAccueil">
            Suivez-nous sur les réseaux : <a href="https://www.google.com/search?q=facebook+mycave&rlz=1C1ONGR_frFR939FR939&oq=facebook+mycave&aqs=chrome..69i57j0i512j0i22i30j0i10i22i30l2j0i22i30l5.2801j0j7&sourceid=chrome&ie=UTF-8" target="_blank"><img class="LogoFacebook" src="../img/site_charte/facebook.png" alt="LogoFacebook"></a>
            <a href="https://www.google.com/search?q=instagram+mycave&rlz=1C1ONGR_frFR939FR939&sxsrf=AOaemvLdjJ5TzWg33B3BJwFnVnLk8HZcLg%3A1631269341417&ei=3TE7Ydq3GOnIgwf49r64Dg&oq=instagram+mycave&gs_lcp=Cgdnd3Mtd2l6EAM6CAgAEAgQDRAeOgYIABANEB46BggAEAgQHkoECEEYAFCXzz9Y99Y_YIvYP2gAcAB4AIABcogBnwWSAQM4LjGYAQCgAQHAAQE&sclient=gws-wiz&ved=0ahUKEwiamoLtl_TyAhVp5OAKHXi7D-cQ4dUDCA4&uact=5" target="_blank"><img class="LogoInstagram" src="../img/site_charte/instagram.png" alt="LogoInstagram"></a>
        </div>

    </div>
</div>

<div class="modifCatalogue">

<?php

    
    
    if (!isset($_SESSION["NickNameUser"]) || $_SESSION["NickNameUser"] == FALSE) {

        
        echo "<p> Vous devez être connecté pour modifier le catalogue des vins.</p>";
        // echo "<p> Si vous n'avez pas encore de compte, inscrivez-vous.</p>";
        
        include 'includeContent/formConnexionUser.php';
        // include 'includeContent/formInscriptionUser.php';
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

</div>
    

    

        
    <?php include 'includeContent/footer.php'; ?>

</body>
</html>