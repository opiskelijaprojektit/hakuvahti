<?php

//@author Ville Kähkönen

// vaadittavat tiedostot
require_once '../../config/config.php';
require_once HELPERS_DIR . 'DB.php';
require_once MODEL_DIR . 'kurssit.php';
require_once MODEL_DIR . 'lapikaynti_sql_lause.php';


// Testikäyttöön tarkoitettu tulostus
echo "Tietokanta:" . $_SERVER["DB_DATABASE"] . "\n";
echo "Käyttäjä:" . $_SERVER["DB_USERNAME"] . "\n";
echo "----------" . "\n";



$tulos = lapikaynti_sql_lause(); // Suritetaan kysely
$kurssit_haun_mukaan = getCoursesWithSearchData(); // Hakee kaikki kurssit

foreach($tulos as $rivi) {
  $email = $rivi['email'];
  $hakusana = $rivi['hakusana'];
  
  $hakusana_loytyy = false; // alustaa muuttujan false:ksi oletuksena

  // Vertaillaan kurssien nimiä tietokannan hakusanoihin
  foreach($kurssit_haun_mukaan as $schooldata) { 
    foreach ($schooldata["Courses"] as $coursedata) {
      if(isset($coursedata["text"])) {
        $teksti = $coursedata["text"];
        $hash = $coursedata["hash"];
      
        if(stripos($teksti, $hakusana) !== false) { 
          //hakusana läytyi, tulostetaan komentoriville testikäytössä.
          echo "Käyttäjä: $email\n";
          echo "Hakusana: $hakusana löytyi koulutuksesta. \n";
          echo "-------\n";

          //hakusana löytyi, lähetetään sähköpostia tilaajalle
          $html_pohja = file_get_contents('sahkoposti_pohja.html'); //Luodaan HTML-pohja
          $subject = "Hakusanasi löytyi koulutuksista";
          
          $message = str_replace('[HAKUSANA]', $hakusana, $html_pohja); //Korvaa [HAKUSANA]-kohdan HTML-pohjassa

          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= "From: neutroni.hayo.fi";
          

          mail($email, $subject, $message, $headers);
          $hakusana_loytyy = true;
          break;
        }
      }
    }
    if($hakusana_loytyy) {
      break; // ei tarvitse jatkaa
    }
  }
}



?>