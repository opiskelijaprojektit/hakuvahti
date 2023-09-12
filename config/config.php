<?php

// Muodostetaan sovelluksen baseurl tämän php-tiedoston sijaintiin perustuen.
// Esimerkiksi, jos tämän config.php-tiedoston täydellinen polku on
// /home/tunnus/public_html/hakuvahti/config, niin siitä
// muodostetaan seuraava baseurl-osoite: /~tunnus/hakuvahti
preg_match('/\/home\/(.*)\/public_html\/(.*)\/config/', __DIR__, $matches);
$baseurl = "/~$matches[1]/$matches[2]";

// Määritellään skriptissä käytettävät vakiot.
$config = array(
  "db" => array(
    "dbname" => $_SERVER["DB_DATABASE"],
    "username" => $_SERVER["DB_USERNAME"],
    "password" => $_SERVER["DB_PASSWORD"],
    "host" => "localhost"
  ),
  "urls" => array(
    "baseUrl" => $baseurl
  )
);

define("PROJECT_ROOT", dirname(__DIR__) . "/");
define("HELPERS_DIR", PROJECT_ROOT . "src/helpers/");
define("TEMPLATE_DIR", PROJECT_ROOT . "src/view/");
define("MODEL_DIR", PROJECT_ROOT . "src/model/");
define("CONTROLLER_DIR", PROJECT_ROOT . "src/controller/");
define("BASEURL", $config['urls']['baseUrl']);

// Määritellään kurssitietojen noudossa tarvittavat vakiot.
define("COURSES_URL_BASE", "https://sasky.inschool.fi/browsecourses/");
define("COURSES_URL_COURSES", COURSES_URL_BASE . "index_json");
define("COURSES_URL_COURSEDATA", COURSES_URL_BASE . "popup");

?>