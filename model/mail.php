<?php
/**
 * Created by PhpStorm.
 * User: stijn_000
 * Date: 15-9-2016
 * Time: 11:04
 */

$naar = $_POST['name'];
$onderwerp = $_POST['subject'];
$bericht = $_POST['message'];
$email = $_POST ['to'];
$phone = $_POST ['telephone'];


$to      = 'stijn.olthof@live.nl';
$subject = $onderwerp;
$message = $bericht;
$headers = 'From:'.$email . "\r\n" .
    'Reply-To:'.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);



$to      = $email;
$subject = 'mail verzonden';
$message = 'bedankt voor how vraag';
$headers = 'From: stijn.olthof@live.nl' . "\r\n" .
    'Reply-To: stijn.olthof@live.nl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: ../home");
