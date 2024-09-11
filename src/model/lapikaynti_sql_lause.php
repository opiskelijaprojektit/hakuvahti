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

?>