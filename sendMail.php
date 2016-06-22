<?php
  $mailto = "fabrice.meuzeret@univ-reims.fr";
  $nomprenom = $_POST['nom'].' '.$_POST['prenom'];
  $sujet = $_POST['message'];
  $mail = $_POST['email'];
  $messagecontact = $_POST['message'];
  if (isset($_POST['societe'])){
    $societe = $_POST['societe'];
    filter_var($societe,FILTER_SANITIZE_STRING);
  }
 filter_var($nomprenom,FILTER_SANITIZE_STRING);
 filter_var($sujet,FILTER_SANITIZE_STRING);
 filter_var($mail,FILTER_SANITIZE_EMAIL);
 filter_var($messagecontact,FILTER_SANITIZE_STRING);

 $newsujet = "Site Studio MMI : ".$sujet;
 $newmessagecontact = $messagecontact."\n \nCe message vous a été envoyé via le formulaire de contact du site Studio MMI";
 $entete = 'From: '.$mail."\r\n".
 'Reply-To: '.$mail."\r\n".
 'X-Mailer: PHP/'.phpversion();

 mail($mailto, $newsujet, $newmessagecontact, $entete);
?>
