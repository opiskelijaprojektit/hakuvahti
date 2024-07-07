<?php

require_once HELPERS_DIR . 'DB.php';

/**
 * Lisää uuden hakusanan käyttäjälle.
 *
 * @author Esko Taivalmäki
 *
 * @param  int    $idkayttaja Käyttäjäid, jolle hakusana lisätään.
 * @param  string $hakusana   Lisättävä hakusana.
 * 
 * @return int                Lisätyn hakusanan pääavaintunniste.
 */
function lisaaHakusanaKayttajalle($idkayttaja,$hakusana) {
  DB::run('INSERT INTO hakuvahti_hakusana (idkayttaja,hakusana) VALUE  (?,?);',[$idkayttaja,$hakusana]);
  return DB::lastInsertId();
}

/**
 * Poistaa hakusanan käyttäjältä.
 *
 * @author Vee Kankaristo
 *
 * @param  int    $idkayttaja Käyttäjäid, jolta poistetaan hakusana.
 * @param  int    $idhakusana Hakusanaid, joka poistetaan.
 */
function poistaHakusanaKayttajalta($idkayttaja, $idhakusana) {
  DB::run('DELETE FROM hakuvahti_hakusana WHERE idkayttaja = ? AND idhakusana = ?',[$idkayttaja, $idhakusana]);
}

?>
