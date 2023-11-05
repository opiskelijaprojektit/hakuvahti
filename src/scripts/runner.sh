#!/bin/bash

#Haetaan käyttäjän kotikansiosta .htaccess-tiedostosta kaikki
#ympäristömuuttujien arvot

ENVS=$(awk '/SetEnv/{print $2 "=" $3}' ~/public_html/.htaccess )

#Luodaan ympäristömuuttujat yksitellen niin, että ne näkyvät
#ainoastaan tämän scriptin alla.

while read -r line; do
  export $line;
done <<<"$ENVS"

#Suoritetaan parametrina annettu php-scripti.
php $1