<?php
/* Betreffen und Email Variable */
    $emailBetreff = 'Neue Nachricht (hansefilm-studio.de)';
	$webmaster = 'marko3@kabelmail.de';

/* Emailforen Daten*/

  $Vorname = $_POST['Vorname'];
  $Nachname = $_POST['Nachname'];
  $Telefon = $_POST['Telefon']; 
  $Email = $_POST['Email'];
  $Empfaenger = $_POST['Empfaenger'];
  $Nachricht = $_POST['Nachricht'];
  $formatNachricht = wordwrap($Nachricht, 15, "\n", true);
  
  /* Was in der E-mail stehen soll */
$body = <<<EOD
Neue Nachricht an: $Empfaenger
Inhalt: 
$formatNachricht 

gesendet von:
Name: $Vorname $Nachname 
Telefon: $Telefon 
Email: $Email 
EOD;  

$header = "From: $Email\r\n";
       'X-Mailer: PHP/' . phpversion();

$retval = mail($webmaster, $emailBetreff, $body, $header);

   if( $retval == true )  
   {
      echo "$Vorname, Deine Nachricht wurde erfolgreich versendet. Vielen Dank!";
   }
   else
   {
      echo "$Vorname, Deine Nachricht wurde leider nicht versendet. Vielen Dank!";
   }

?>	