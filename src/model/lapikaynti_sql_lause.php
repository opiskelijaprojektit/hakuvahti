<?php

/**
 * Tämä funktio on scripts/lapikaynti.php:n
 * ensimmäisen version SQL-lause.
 * 
 * @author: Ville Kähkönen
 */

function lapikaynti_sql_lause() {
  $kysely = "SELECT hakuvahti_kayttaja.email, hakuvahti_hakusana.hakusana
             FROM hakuvahti_kayttaja
             JOIN hakuvahti_hakusana ON hakuvahti_kayttaja.idkayttaja = hakuvahti_hakusana.idkayttaja";

  $tulos = DB::run($kysely)->fetchAll(PDO::FETCH_ASSOC);

  return $tulos;
}


/**
 * Hakee tietokannasta kaikkien käyttäjien idkayttaja ja email.
 * 
 * @author Annastiina Koivu
 * 
 * @return array palauttaa tiedot assosiatiivisessa taulukossa
 *
 */

function hae_kayttajat() {
    $kysely = "SELECT idkayttaja, email FROM hakuvahti_kayttaja";

    $tulos = DB::run($kysely)->fetchAll(PDO::FETCH_ASSOC);

    return $tulos;
}


/**
 * Hakee tietokannasta yksittäisen käyttäjän hakusanat käyttäjän id:llä.
 * 
 * @author Annastiina Koivu
 * 
 * @param string $idkayttaja    käyttäjän id tietokannassa
 * 
 * @return array                palauttaa hakusanat assosiatiivisessa taulukossa
 * 
 */

function hae_kayttaja_hakusanat($idkayttaja) {
    $kysely = "SELECT hakusana FROM hakuvahti_hakusana WHERE idkayttaja = $idkayttaja";

    $tulos = DB::run($kysely)->fetchAll(PDO::FETCH_ASSOC);

    return $tulos;
}


?>