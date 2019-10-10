<?php

function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }

  function sendMessage($nom, $prenom, $telephone, $email, $object, $message)
  {
    $email_to = "contact@nigerielles.ne";

    $email_message = "From: ";
    $email_message .=  "Nom: ". clean_string($nom)."\n";
    $email_message .=  "Prénom: ". clean_string($prenom)."\n";
    $email_message .=  "Téléphone: ". clean_string($telephone)."\n";
    $email_message .=  "Email: ". clean_string($email)."\n";
    $email_message .=  "Message: ". clean_string($message)."\n";

    $header = 'From: '.$email."\r\n". 'Replay-to: '.$email."\r\n".'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $object, $email_message, $header);
  }