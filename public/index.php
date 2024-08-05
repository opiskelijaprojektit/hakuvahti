
<?php

// Suoritetaan projektin alustusskripti.
require_once '../src/init.php';

// Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
$request = str_replace($config['urls']['baseUrl'],'',$_SERVER['REQUEST_URI']);
$request = strtok($request, '?');

// Luodaan uusi Plates-olio ja kytketään se sovelluksen sivupohjiin.
$templates = new League\Plates\Engine(TEMPLATE_DIR);

// Selvitetään mitä sivua on kutsuttu ja suoritetaan sivua vastaava
// käsittelijä.
switch ($request) {
  case '/':
  case '/uusihaku':
    // Tarkistetaan, onko lomakkeelta lähetetty tietoa.
    if (isset($_POST['laheta'])) {
      $formdata = cleanArrayData($_POST);
      require_once CONTROLLER_DIR . 'uusihaku.php';
      $tulos = lisaaHakusana($formdata);
      echo "Haku lisätty";
      break;
    } else {
      echo $templates->render('uusihaku');
      break;
    }
  default:
    echo $templates->render('notfound');
}

?>