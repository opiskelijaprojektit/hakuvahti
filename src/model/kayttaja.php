<?php

require_once HELPERS_DIR . 'DB.php';

/**
 * Hakee käyttäjän tiedot sähköpostiosoitteella.
 *
 * @author Esko Taivalmäki
 *
 * @param  string $email    Haettavan käyttäjän sähköpostiosoite.
 * 
 * @return array            Haetun käyttäjän tiedot.
 */  
function haeKayttajaSahkopostilla($email) {
  return DB::run('SELECT idkayttaja, email, avain FROM hakuvahti_kayttaja WHERE email = ?;', [$email])->fetch();
}

/**
 * Lisää uuden käyttäjän tietokantaan.
 *
 * @author Esko Taivalmäki
 * @author Pekka Tapio Aalto <pekka.aalto@sasky.fi>
 *
 * @param  string $email    Lisättävän käyttäjän sähköpostiosoite.
 * 
 * @return array            Lisätyn käyttäjän pääavaintunniste ja 
 *                          SHA-tiivisteavain.
 */  
function lisaaKayttaja($email) {
  // Luodaan käyttäjälle riittävän turvallinen tunniste.
  // Tunniste luodaan laskemalla SHA-tiiviste tekstistä, jossa on 
  // yhdistetty käyttäjän sähköpostiosoite, palvelimen aika ja 
  // satunnaisluku.
  $avain = sha1($email . hrtime(true) . rand());

  // Lisätään käyttäjä ja avain tietokantaan.
  DB::run('INSERT INTO hakuvahti_kayttaja (email, avain) VALUE  (?,?);',[$email, $avain]);
  
  // Palautetaan taulukko, jossa:
  //  ["id"]    käyttäjän pääavaintunniste
  //  ["email"] käyttäjälle luotu SHA-tiivisteavain
  return array("idkayttaja"=>DB::lastInsertId(), "email"=>$email, "avain"=>$avain);
}

?>
