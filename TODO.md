# Projektin TODO-lista

Tällä sivulla on luettelo toteuttavista toiminnallisuuksista. Sovi luettelosta löytyvän toiminnallisuuden toteuttamisesta [Pekka Tapio Aallon](https://github.com/pekkatapio) kanssa ennen, kuin lähdet toteuttamaan toiminnallisuutta.

## Odottaa toteuttamista

 - [ ] (**toiminto-ulkoasu**) Sovelluksen ulkoasu vastamaan kuntayhtymän graafista ohjeistusta sekä kotisivujen yleisilmettä. 
 - [ ] (**toiminto-muokkaus**) Tilattujen hakusanojen muokkaussivu, jossa käyttäjä voi halutessaan poistaa tai lisätä hakusanoja. Muokkaussivulle pääsee yksilöllisellä tunnisteella, joka on tallennettu käyttäjätauluun.
 - [ ] (**toiminto-poisto-taustalla**) Kerran päivässä ajettava skripti, joka tarkistaa, onko käyttäjän hakusana voimassaoloaika päättynyt ja poistaa sen tarvittaessa. Poistaa lopuksi myös käyttäjän, jos käyttäjälle ei jää enää yhtään hakusanaa.
 - [ ] (**toiminto-läpikäynti-kooste**) Muokataan läpikäynti koostamaan löytyneet hakusanat yhteen sähköpostiin ja lähettää koosteen käyttäjän sähköpostiin löytyneistä kursseista. Koosteeseen sisällytetään myös linkit löytyneisiin koulutuksiin.

## Keskeneräiset
 

## Valmiit ✓

 - [X] Peruspohjan toteuttaminen, jossa käyttäjältä kysytään sähköpostiosoite ja hakusana sekä ne tallennetaan tietokantaan.
 - [X] Kurssitietojen nouto Wilman avoimesta rajapinnasta ja noudettujen tietojen uudelleenkoostaminen.
 - [X] Kerran päivässä ajettava skripti, joka tarkistaa, että löytyykö käyttäjän antama hakusana kurssitiedoista. Lähettää tiedon käyttäjän sähköpostiin löytyneistä hakusanoista.
