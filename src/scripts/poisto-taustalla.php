<?php

//@Tuomas Aalto

// vaaditut konfiguraatiot
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../src/helpers/DB.php';

// Hakusanan voimassaoloaika (30 päivää)
$voimassaOlo = 30;

try {
    // Haetaan kaikki hakusanat, jotka ovat vanhentuneet
    $sql = "SELECT idhakusana, idkayttaja FROM hakuvahti_hakusana WHERE aika < NOW() - INTERVAL :voimassaOlo DAY";
    $hakusanat = DB::run($sql, ['voimassaOlo' => $voimassaOlo])->fetchAll();

    // Käy läpi kaikki vanhentuneet hakusanat
    foreach ($hakusanat as $hakusana) {
        $idhakusana = $hakusana['idhakusana'];
        $idkayttaja = $hakusana['idkayttaja'];

        // Poista vanhentuneet hakusanat
        $poistaHaku = "DELETE FROM hakuvahti_hakusana WHERE idhakusana = :idhakusana";
        DB::run($poistaHaku, ['idhakusana' => $idhakusana]);

        // Tarkista, onko käyttäjällä vielä hakusanoja
        $tarkistaKayttaja = "SELECT COUNT(*) as hakusana_count FROM hakuvahti_hakusana WHERE idkayttaja = :idkayttaja";
        $tulos = DB::run($tarkistaKayttaja, ['idkayttaja' => $idkayttaja])->fetch();

        // Poista käyttäjä, jos hakusanoja ei ole
        if ($tulos['hakusana_count'] == 0) {
            $poistaKayttaja = "DELETE FROM hakuvahti_kayttaja WHERE idkayttaja = :idkayttaja";
            DB::run($poistaKayttaja, ['idkayttaja' => $idkayttaja]);
        }
    }

    // Ilmoitus onnistuneesta siivouksesta
    echo "Päivittäinen siivous suoritettu.";
} catch (PDOException $e) {
    // Virheen käsittely
    echo "Virhe: " . $e->getMessage();
}
?>