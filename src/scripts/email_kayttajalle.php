<?php

/**
 * Scripti jolla lähetetään käyttäjälle sähköpostia,
 * hyödyntäen Platesia ja sähköpostipohjia.
 * 
 * @author Annastiina Koivu
*/

// Vaadittavat tiedostot
require_once '../../config/config.php';
require_once '../../vendor/autoload.php';

// Luodaan uusi Plates-olio sähköpostipohjille.
$email_templates = new League\Plates\Engine(TEMPLATE_DIR . "email/");

$email = 'annastiina.koivu@gmail.com';

$subject = "TESTI";

$message = $email_templates->render('lapikaynti', ['hakusana' => 'IT-tuki']);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: neutroni.hayo.fi";

mail($email, $subject, $message, $headers);

?>