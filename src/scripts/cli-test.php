<?php

  /*
   * Tausta-ajotoiminnallisuutta esittelevä testiskripti.
   *
   * Suorita tämä skripti komentorivillä:
   *  ./runner.sh cli-test.php
   *
   */

  // Tuodaan sovelluksen määritykset ja tietokannan apufunktio.
  require_once '../../config/config.php';
  require_once HELPERS_DIR . 'DB.php';

  // Tulostetaan skriptin suoritusaikaiset tietokanta ja 
  // tietokantakäyttäjä.
  echo "Tietokanta:" . $_SERVER["DB_DATABASE"] . "\n";
  echo "Käyttäjä:" . $_SERVER["DB_USERNAME"] . "\n";

  // Haetaan käyttäjän tiedot sähköpostiosoitteella eli demotaan
  // model-kansion funktiokutsua.
  require_once MODEL_DIR . 'kayttaja.php';
  $user = haeKayttajaSahkopostilla('tunnus@osoi.te');

  // Tulostetaan jokaiselta tulosriviltä käyttäjän sähköpostiosoite.
  echo "email: $user[email]\n";

?>
