<?php

/**
 * Lisää hakusanan käyttäjälle.
 * 
 * Lomaketiedon käsittelijä, joka lisää uuden hakusanan 
 * käyttäjälle ja tarvittaessa lisää käyttäjän, jos sitä
 * ei ole olemassa.
 *
 * @author Esko Taivalmäki
 * @author Pekka Tapio Aalto <pekka.aalto@sasky.fi>
 *
 * @param  formdata    Taulukko, joka sisältää lomakkeen tiedot.
 * 
 * @return array       Taulukko, joka sisältää käsittelyn tuloksen.
 */
function lisaaHakusana($formdata) {

  // Tuodaan tarvittavat tietokantafunktiot.  
  require_once(MODEL_DIR . 'kayttaja.php');
  require_once(MODEL_DIR . 'hakusana.php');

  // Haetaan lomakkeen tiedot omiin muuttujiinsa.
  $email = $formdata['email'];
  $hakusana = $formdata['hakusana'];

  // Tarkastetaan onko käyttäjän sähköposti jo olemassa tietokannassa. 
  $kayttaja = haeKayttajaSahkopostilla($email);

  // Jos löytyy, tulee palautusarvona haetun käyttäjän tiedot.
  // Jos ei löydy, niin lisätään uusi käyttäjä.
  // Kummassakin tilanteessa otetaan talteen sekä idkayttaja että
  // avain.
  if (isset($kayttaja['idkayttaja'])) {
    $idkayttaja = $kayttaja['idkayttaja'];
    $avain = $kayttaja["avain"];
  } else {
    $uusikayttaja = lisaaKayttaja($email);
    $idkayttaja = $uusikayttaja['idkayttaja'];
    $avain = $uusikayttaja["avain"];
  }

  // Lisätään hakusana käyttäjälle.
  $idhakusana = lisaaHakusanaKayttajalle($idkayttaja,$hakusana);
          
  // Palautetaan onnistuneen lisäyksen jälkeen tiedot.
  return [
    "status"     => 200,
    "idkayttaja" => $idkayttaja,
    "avain"      => $avain,
    "idhakusana" => $idhakusana,
    "data"       => $formdata
  ]; 
              
}

?>
