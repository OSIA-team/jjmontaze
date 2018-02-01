<?php

  session_start();

  foreach ($_POST as $key => $value) {

    $$key = $value;
    $_SESSION[$key] = $value;
  }
  if ($jmeno == '') {
    $_SESSION['error'] .= "Musíte vyplnit jméno!".'\n';
  }
  if ($email == '') {
    $_SESSION['error'] .= "Musíte vyplnit emailovou adresu!".'\n';
  }
  if ($content == '') {
    $_SESSION['error'] .= "Musíte mít dotaz!".'\n';
  }

  if (isset($_SESSION['error'])) {
    header('location: ../index.php#kontakt');
    die();
  }


require '../public/PHPMailer/PHPMailerAutoload.php';



$subject = 'Email z webu';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
//$mail->isSendmail();
$mail->CharSet = 'UTF-8';
//Set who the message is to be sent from
$mail->setFrom($email, $jmeno);
//Set who the message is to be sent to
$mail->addAddress("jarolik.jan@seznam.cz", "Jan Jarolík");
//Set the subject line
$mail->Subject = "$subject";

$mail->ContentType = 'text/plain';
$mail->IsHTML(false);

// Very important: don't have lines for MsgHTML and AltBody
$mail->Body = $content;
// $mail->Body = $_POST["msg"];  //If using web mail form, use this line instead.

//$headers = 'From: noreply@cmsr.cz';
//$headers .= '\r\n'.'Content-Type:text/plain;charset=utf-8';



if ($mail->Send()) {
  //unset($_SESSION);
  session_destroy();
  header('location: ../index.php');
  die();
} else {
  die("Mailer Error: " . $mail->ErrorInfo);
  $_SESSION['error'] .= 'Email se nepodařilo odeslat, zkuste to znovu!';
  header('location: ../index.php#kontakt');
  die();
}

?>
