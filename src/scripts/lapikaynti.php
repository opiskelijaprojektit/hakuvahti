<?php

/**
 * Kerran päivässä ajettava scripti, 
 * joka hakee Wilman rajapinnasta käyttäjän hakusanoja vastaavat kurssit.
 * 
 * @author Annastiina Koivu
 * @author Ville Kähkönen
 */


// Vaadittavat tiedostot
require_once '../../config/config.php';
require_once HELPERS_DIR . 'DB.php';
require_once MODEL_DIR . 'kurssit.php';
require_once MODEL_DIR . 'lapikaynti_sql_lause.php';


// Testikäyttöön tarkoitettu tulostus
echo "Tietokanta:" . $_SERVER["DB_DATABASE"] . "\n";
echo "Käyttäjä:" . $_SERVER["DB_USERNAME"] . "\n";
echo "----------" . "\n";


// Haetaan kaikki kurssit
$kurssit_haun_mukaan = getCoursesWithSearchData();
// Haetaan kaikki käyttäjät
$kayttajat = hae_kayttajat();

// Käydään käyttäjät yksitellen läpi
foreach ($kayttajat as $kayttaja => $tiedot) {
    $idkayttaja = $tiedot['idkayttaja'];
    $email = $tiedot['email'];

    // Haetaan kyseisen käyttäjän kaikki hakusanat
    $kayttaja_hakusanat = hae_kayttaja_hakusanat($idkayttaja);

    // Alustetaan muuttuja, 
    // johon koostetaan hakusanoilla löytyneet kurssit
    // 'hakusana' => 'hakutulos'
    $loytyneet_kurssit = array();

    // Käydään hakusanat yksitellen läpi
    foreach ($kayttaja_hakusanat as $key => $value) {
        $hakusana = $value['hakusana'];

        // Alustetaan muuttuja,
        // johon kerätään kurssien tiedot
        $hakutulos = array();

        // Käydään läpi haettu kurssidata,
        // ja etsitään sieltä hakusanaa.

        // Käydään läpi koulu kerrallaan
        foreach($kurssit_haun_mukaan as $schooldata) {
            // Käydään koulun kurssit yksitellen läpi
            foreach ($schooldata["Courses"] as $coursedata) {
                // Katsotaan sisältääkö kurssi dataa
                if(isset($coursedata["text"])) {
                    $teksti = $coursedata["text"];
                    $hash = $coursedata["hash"];
                    
                    // Etsitään hakusanaa kurssidatasta
                    if(stripos($teksti, $hakusana) !== false) {
                        // Hakusana löytyy, napataan halutut kurssitiedot muuttujaan
                        $kurssi_tiedot = array( "Koulutus" => $coursedata['Koulutus'],
                                                "Oppilaitos" => $coursedata['Oppilaitos'],
                                                "Tutkintotyyppi" => $coursedata['Tutkintotyyppi'],
                                                "Linkki" => $coursedata['Tutkinnon perusteet']);
                        $hakutulos[] = $kurssi_tiedot;
                    }
                }
            }
        }

        $loytyneet_kurssit[$hakusana] = $hakutulos;
    }

    // Testikäyttöön tarkoitettu tulostus
    echo "\n";
    echo "Käyttäjä: " . $email . "\n";
    echo "--------------------------------------" . "\n";
    foreach ($loytyneet_kurssit as $hakusana => $hakutulos) {
        echo "HAKUSANALLA " . $hakusana . " löytyi " . count($hakutulos) . " tulosta:" . "\n";
        echo "+++++++\n";

        foreach ($hakutulos as $kurssi) {
            echo "Koulutus:\t" . $kurssi['Koulutus'] . "\n";
            echo "Oppilaitos:\t" . $kurssi['Oppilaitos'] . "\n";
            echo "Tutkintotyyppi:\t" . $kurssi['Tutkintotyyppi'] . "\n";
            echo "Linkki:\t\t" . $kurssi['Linkki'] . "\n";
            echo "-------\n";
        }

        echo "\n";
    }


    // //hakusana löytyi, lähetetään sähköpostia tilaajalle
    // $html_pohja = file_get_contents('sahkoposti_pohja.html'); //Luodaan HTML-pohja
    // $subject = "Hakusanasi löytyi koulutuksista";
    
    // $message = str_replace('[HAKUSANA]', $hakusana, $html_pohja); //Korvaa [HAKUSANA]-kohdan HTML-pohjassa

    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= "From: neutroni.hayo.fi";
    

    // mail($email, $subject, $message, $headers);


}


?>