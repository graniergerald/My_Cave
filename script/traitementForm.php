<?php
/* Récupération des informations du formulaire*/
if (get_magic_quotes_gpc())
{ 
 $nom = stripslashes(trim($_POST['nom']));
 $prenom = stripslashes(trim($_POST['prenom']));
 $mail = stripslashes(trim($_POST['mail']));
 $telephone = stripslashes(trim($_POST['telephone']));
 $message = stripslashes(trim($_POST['message']));
}     
else      
{
 $nom = filter_var(($_POST['nom']), FILTER_SANITIZE_SPECIAL_CHARS);
 $prenom = filter_var(($_POST['prénom']), FILTER_SANITIZE_SPECIAL_CHARS);
 $mail = filter_var(($_POST['mail']), FILTER_SANITIZE_SPECIAL_CHARS);
 $telephone = filter_var(($_POST['telephone']), FILTER_SANITIZE_SPECIAL_CHARS);
 $message = filter_var(($_POST['message']), FILTER_SANITIZE_SPECIAL_CHARS);
}

if (empty($telephone) 
 || empty($nom) 
 || empty($message))
{  
 $alert = 'Tous les champs doivent être renseignés';
} 

/*Envoi du mail*/
/*Le destinataire*/
$to="granier.gerald01@gmail.com";

/*Le sujet du message qui apparaitra*/
$sujet="Message depuis le site";
$msg = '';
/*Le message en lui même*/
/*$msg = 'Mail envoye depuis le site' "rnrn";*/
$msg = 'Nom : '.$nom;
$msg .= 'Prenom : '.$prenom;
$msg .= 'Mail : '.$mail;
$msg .= 'Telephone : '.$telephone;
$msg .= 'Message : '.$message;
/*Les en-têtes du mail*/
$headers = 'From: MESSAGE DU SITE MyCave<granier.gerald01@gmail.com>';
/*L'envoi du mail - Et page de redirection*/
if (mail($to, $sujet, $msg, $headers)) {
    header('Location:https://mycave.granier-gerald.fr/template/accueil.php');
}
else {
    echo "Un problème est survenu.";
}
?>