<?php

// Tässä tiedostossa kaikki scripts/läpikäynti.php:n käyttämät SQL-lauseet.


/**
 * Tämä funktio on scripts/lapikaynti.php:n
 * edellisen version SQL-lause.
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
 * Hakee tietokannasta käyttäjien id:n, sekä emailin.
 * Palauttaa käyttäjät assosiatiivisena taulukkona.
 * 
 * @author Annastiina Koivu
 */

function hae_kayttajat() {
    $kysely = "SELECT idkayttaja, email FROM hakuvahti_kayttaja";

    $tulos = DB::run($kysely)->fetchAll(PDO::FETCH_ASSOC);

    return $tulos;
}


/**
 * Hakee tietokannasta yksittäisen käyttäjän hakusanat.
 * Palauttaa käyttäjän hakusanat assosiatiivisena taulukkona.
 * 
 * @author Annastiina Koivu
 */

function hae_kayttaja_hakusanat($idkayttaja) {
    $kysely = "SELECT hakusana FROM hakuvahti_hakusana WHERE idkayttaja = $idkayttaja";

    $tulos = DB::run($kysely)->fetchAll(PDO::FETCH_ASSOC);

    return $tulos;
}


?>