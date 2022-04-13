<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Cave - Contact</title>
        <meta name="description" content="My Cave, Cave à vin à Audenge. Pour toute question ou demande de renseignements, n’hésitez pas à nous contacter par le biais de ces informations ou par le formulaire de contact.">
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
    <div class="imgContact">
        
    </div>
    <div class="presentation">
        <div class="presAccroche">
            <h3>Ecrivez-nous</h3>
            <h1>Contact</h1>
            <p>Pour toute question ou demande de renseignements, n’hésitez pas à nous contacter par le biais de ces informations ou par le formulaire de contact.</p>
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

<script type="text/javascript" src="https://form.jotform.com/jsform/212538130135344"></script>

<form class="formContact" action="traitement.php" method="post">
<p>
    <strong>Nom<span style="color: #ff0000;">*</span> :</strong> <label for="nom"> </label> <input id="nom" name="nom" size="10" type="text" /> 
    <strong>Prénom :</strong> <label for="prenom"></label> <input id="prenom" name="prenom" size="10" type="text" /> <br>
    <strong>Mail <span style="color: #ff0000;">*</span> : </strong><br /> <label for="mail"> </label><input id="mail" name="mail" size="20" type="text" />
    <strong>Téléphone<span style="color: #ff0000;">*</span> :<label for="telephone"></label></strong> <input id="telephone" name="telephone" size="20" type="text" /> 
</p>
<p>Message <span style="color: #ff0000;">*</span> : <br>
    <label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea>
</p>
<p>
<input type="submit" value="Envoyer" /> <input type="reset" value="Effacer" />
</p>
<p></p>
</form>

<div class="MapVenezNousVoir">

    <div class="map-responsive map">
        
        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=33%20Rue%20Daniel%20Digneaux%20Audenge%2033980&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">iframe google maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            
        </div>
        
        <div class="txtMap">
            <h3>Venez nous voir</h3>
            <p><h4>Adresse :</h4>
                <p><a href="https://www.google.com/maps/place/33+Rue+Daniel+Digneaux,+33980+Audenge/@44.688701,-1.0062289,17z/data=!3m1!4b1!4m5!3m4!1s0xd5496230db93ca5:0x5c4d0608fd6b1d90!8m2!3d44.6886972!4d-1.0040402" target="_blank">33 Rue Daniel Digneaux</br>Audenge 33980</a></p></p>
        </div>
</div>
        
<?php include 'includeContent/footer.php'; ?>
</body>