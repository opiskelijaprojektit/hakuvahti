<?php

/**
 * Poistaa hakusanan käyttäjältä
 * 
 * Lomaketiedon käsittelijä, joka poistaa hakusanan 
 * käyttäjältä.
 *
 * @author Vee Kankaristo
 *
 * @param  formdata    Taulukko, joka sisältää lomakkeen tiedot.
 * 
 * @return array       Taulukko, joka sisältää käsittelyn tuloksen.
 */
function poistaHakusana($formdata) {

    // Tuodaan tarvittavat tietokantafunktiot.
    require_once(MODEL_DIR . 'kayttaja.php');
    require_once(MODEL_DIR . 'hakusana.php');

    // Haetaan lomakkeen tiedot omiin muuttujiinsa.
    $idkayttaja = $formdata['idkayttaja'];
    $idhakusana = $formdata['idhakusana'];

    // Poistaa hakusanan käyttäjältä.
    $poistettavaidhakusana = poistaHakusanaKayttajalta($idkayttaja,$idhakusana);

    // Palautetaan onnistuneen poiston jälkeen tiedot.
    return [
        "status"     => 200,
        "idkayttaja" => $idkayttaja,
        "idhakusana" => $idhakusana,
        "data"       => $formdata
    ];
}

 ?>