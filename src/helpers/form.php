<?php

// Siistii käyttäjän lomakkeelle syöttämät tiedot.
function cleanArrayData($array=[]) {
  $result = array();
  foreach ($array as $key => $value) {
    $cleaned = trim($value);
    $cleaned = stripslashes($cleaned);
    $result[$key] = $cleaned;
  }
  return $result;
}

// Tämä funktio palauttaa kentän arvon taulukosta, jos se on määritelty, 
// muuten palautetaan ns. tyhjäaro (null).
function getValue($values, $key) {
  if (array_key_exists($key, $values)) {
    return htmlspecialchars($values[$key]);
  } else {
    return null;
  }
}

?>