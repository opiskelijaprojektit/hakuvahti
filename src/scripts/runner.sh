#!/bin/bash

# Tuo Apachen käyttäjäkohtaiset .htaccess-tiedostossa määritellyt
# ympäristömuuttujat ja suorittaa PHP-skriptin.
#
# Tämä skripti on tarkoitettu käytettäväksi sovelluksen
# tausta-ajettavien skriptin suorittamiseen joko komentorivillä tai
# cron-ajoitetuissa suorituksissa.
#
# Author: Pekka Tapio Aalto

# Tarkistetaan onko kutsun yhteydessä määritelty suoritettava
# PHP-skripti.
if [[ $# -eq 0 ]] ; then
    echo "Usage: $0 FILE"
    exit 1
fi

# Haetaan käyttäjän kotikansiosta .htaccess-tiedostosta kaikki
# ympäristömuuttujien määrittelyt.
ENVS=$(awk '/SetEnv/{print $2 "=" $3}' ~/public_html/.htaccess)

# Luodaan ympäristömuuttujat yksitellen niin, että ne näkyvät
# ainoastaan tämän istunnon alla.
while read -r line; do
  export $line;
done <<<"$ENVS"

# Suoritetaan parametrina annettu php-skripti.
php $1