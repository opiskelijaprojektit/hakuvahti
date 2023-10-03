# Projektiin osallistuminen

Tältä sivulta löydät ohjeet, miten kopioit projektin omalle tunnuksellesi ja miten toimitat tekemäsi muutokset tarkastettavaksi ja lisättäväksi projektiin.

Jotta voit osallistua mukaan projektiin, niin tarvitset siihen seuraavat asiat:
 - neutroni-palvelimen käyttäjätunnus
 - GitHub-palvelun käyttäjätunnus
 - neutroni-palvelimelle on määritelty SSH-avaimet GitHub-palveluun

Jos sinulla ei ole määritelty SSH-avaimia GitHub-palveluun, niin ohjeet avaimen määrittelyyn löydät [tältä ohjesivulta](https://neutroni.hayo.fi/~pta/book/sovelluksen-julkaisu/valmistelut/ssh-avaimet.html).

## Projektin kopiointi omalle tunnukselle

Saat projektin toimimaan neutroni-palvelimella omalla tunnuksellasi seuraavilla vaiheilla:

1. Mene projektin GitHub-sivulle osoitteessa [https://github.com/opiskelijaprojektit/hakuvahti](https://github.com/opiskelijaprojektit/hakuvahti) ja tee siitä itsellesi uusi *kopiohaara* (fork) seuraavasti: 
   - Klikkaa sivun yläosassa olevaa **Fork**-nappia. 
    - Valitse *Owner*-valintalistan alta organisaatio, johon kopio luodaan. Voit valita tässä oman käyttäjätunnuksesi.
    - Paina **Create fork**-nappia.

2. Mene edellä tekemäsi kopiohaaran projektisivulle ja kopioi **Code**-napin alta *SSH*-muotoinen kloonausosoite muistiin seuraavaa vaihetta varten.

3. Suorita *neutroni*-palvelimen komentorivillä seuraavat komennot:
   ```sh
   cd ~/public_html
   git clone (kopiohaaran SSH-osoite)
   cd ~/public_html/hakuvahti
   composer install
   ```

   Composer ei noudata käyttäjän kotikansion omistusoikeuksia, joten ne täytyy vielä erikseen korjata komennolla:
   ```sh
   sudo fixfileowner
   ```

4. Luo itsellesi projektissa tarvittavat tietokantataulut seuraavasti:

   - Käynnistä tietokannan konsoli komennolla:
     ```sh
     mariadb ktunnus
     ```
     missä `ktunnus`-sanan paikalla on oma *neutroni*-tunnuksesi.

   - Luo tietokantataulut suorittamalla seuraavat SQL-lauseet:
     ```sql
     /* Poistetaan olemassa olevat taulut */
     DROP TABLE IF EXISTS hakuvahti_hakusana;
     DROP TABLE IF EXISTS hakuvahti_kayttaja;

     /* Luodaan taulut */
     CREATE TABLE hakuvahti_kayttaja (
       idkayttaja int(10) unsigned NOT NULL AUTO_INCREMENT,
       email varchar(100) NOT NULL,
       avain char(40) DEFAULT NULL,
       CONSTRAINT pk_kayttaja PRIMARY KEY (idkayttaja)
     );

     CREATE TABLE hakuvahti_hakusana (
       idhakusana int(10) unsigned NOT NULL AUTO_INCREMENT,
       idkayttaja int(10) unsigned NOT NULL,
       hakusana varchar(100) NOT NULL,
       aika timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
       CONSTRAINT pk_hakusana PRIMARY KEY (`idhakusana`),
       CONSTRAINT fk_hakusana_kayttaja FOREIGN KEY (idkayttaja) REFERENCES hakuvahti_kayttaja (idkayttaja)
     );
     ```

   - Anna PHP-skriptien tietokantakäyttäjälle oikeudet näihin tauluhin. Muuta  `tunnus`-sanan paikalle oma neutroni-tunnuksesi. Esimerkiksi, jos neutroni-tunnuksesi on `jjokunen`, niin silloin  GRANT-lauseiden loppu on `'db_jjokunen'@'localhost'`. 
     ```sql
     GRANT SELECT, INSERT, UPDATE, DELETE ON hakuvahti_kayttaja TO 'db_tunnus'@'localhost';
     GRANT SELECT, INSERT, UPDATE, DELETE ON hakuvahti_hakusana TO 'db_tunnus'@'localhost';
     ``` 

   - Jos haluat tietokantaan myös valmiin testidatan, niin suorita myös seuraavat SQL-lauseet. Muuta kahteen ensimmäiseen lauseeseen omat sähköpostiosoitteesi ennen suorittamista.
     ```sql
     /* 
       Testidatan luontilauseet 

       Seuraavat lauseet luovat tauluihin sovelluksen testauksessa käytettävän 
       testidatan. Käyttäjätauluun luodaan kaksi  käyttäjää ja kummallekin 
       lisätään yhteensä viisi hakusanaa niin, että vanhin on 
       syötetty yli kuukausi sitten ja uusin noin kaksi päivää sitten. 
     */ 

     /* Korvaa alla oleviin kenttiin omat sähköpostiosoitteesi. */
     SET @email1 = 'nimi@domai.ni';
     SET @email2 = 'tunnus@osoi.te';

     INSERT INTO hakuvahti_kayttaja VALUES (1, @email1, SHA(CONCAT(@email1,UNIX_TIMESTAMP())));
     INSERT INTO hakuvahti_kayttaja VALUES (2, @email2, SHA(CONCAT(@email2,UNIX_TIMESTAMP())));
     INSERT INTO hakuvahti_hakusana VALUES (1, 1, 'IT-tukihenkilö', SUBTIME(NOW(), '35 11:11:11.0'));
     INSERT INTO hakuvahti_hakusana VALUES (2, 1, 'ohjelmistokehittäjä', SUBTIME(NOW(), '25 1:1:1.0'));
     INSERT INTO hakuvahti_hakusana VALUES (3, 2, 'merkonomi', SUBTIME(NOW(), '18 18:18:18.0'));
     INSERT INTO hakuvahti_hakusana VALUES (4, 2, 'markkinointi', SUBTIME(NOW(), '9 9:9:9.0'));
     INSERT INTO hakuvahti_hakusana VALUES (5, 1, 'tieto- ja viestintä', SUBTIME(NOW(), '2 2:2:2.0'));
     ```

Näiden vaiheiden jälkeen projekti toimii omasta kotikansiostasi osoitteesta `https://neutroni.hayo.fi/~ktunnus/hakuvahti` ja voit aloittaa projektin kehityksen.

## Toiminnallisuuden lisääminen projektiin

Kun olet valinnut (ja sopinut), minkä TODO-listassa olevista toiminnallisuuksista toteutat, niin tee aluksi seuraavat asiat, jotta tekemäsi muutokset tulevat omaan kehityshaaraansa (branch).

1. Suorita seuraava komento projektikansiossa

   ```sh
   git checkout -b toiminto-tunniste
   ```
   missä korvaat `toiminto-tunniste` -tekstin TODO-listassa olevalla tunnisteella. Näin kehityshaaroille tulee sopivan kuvaava nimi.

2. Tee projektiin haluamasi muutokset. Voit tehdä kehityshaaraan haluamasi määrän talletuksia (committeja). Ennen kuin teet committia, niin varmista, ettet tallenna talletuksessa mitään ylimääräisiä tiedostoja. Anna talletuksen kuvaukseksi jokin kuvaa teksti, kuten esimerkiksi `muuttaa projektin ulkoasun vastaamaan ohjeistusta`.

## Toteutetun toiminnallisuuden palautus

Kun olet saanut toiminnallisuuden toteutettua, on sen palautuksen aika. Tämä tapahtuu tekemällä muutoksistasi pull request -pyynnön seuraavasti.

1. Varmista, että olet vienyt kaikki tekemäsi muutokset versiohallintaan eli olet tehnyt talletuksen viimeisimmän muutoksen jälkeen.

2. Siirrä paikallisesti tekemäsi muutokset GitHub-repoon suorittamalla projektikansiossa seuraava komento:
   
   ```sh
   git push origin toiminto-tunniste
   ```

   Korvaa `toiminto-tunniste` -teksti kehityshaaran nimellä, jonka aikaisemmin loit. 

3. Mene GitHubissa oman projektisi sivuille ja tee seuraavat asiat:
    - Paina vihreää **Compare & pull request** -nappia.
    - Kirjoita otsikoksi `lisää toiminnallisuuden toiminto-tunniste`, missä korvaat `toiminto-tunniste`-tekstin paikalle toteuttamasi toiminnon tunnisteen.
    - Kirjoita kuvaustekstiksi lyhyt kuvaus siitä, mitä olet toteuttanut.
    - Paina vihreää **Create pull request**-nappia.

4. Jää odottamaan, että toteuttamasi toiminto joko hyväksytään osaksi projektia tai siihen pyydetään tekemään korjauksia.
