<!----------------------------------------->
<!--------- @author Annastiina Koivu------->
<!--------- @author Ville Kähkönen--------->
<!----------------------------------------->

<?php $this->layout('template') ?>

<h2 style="text-align: center; font-size: 20px;">Löysimme hakuasi vastaavia koulutuksia!</h2><br>

<?php

foreach ($kurssit as $hakusana => $hakutulos) {

    echo "<p><strong>Hakusanalla $hakusana löytyi " . count($hakutulos) . " tulosta:</strong></p><br>";
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='border-bottom: 1px solid;'>";
    echo "<th style='padding: 1em;  text-align: left;'><strong>Koulutus:</strong></th>";
    echo "<th style='padding: 1em;  text-align: left;'><strong>Oppilaitos:</strong></th>";
    echo "<th style='padding: 1em;  text-align: left;'><strong>Tutkintotyyppi:</strong></th>";
    echo "<th style='padding: 1em;  text-align: left;'><strong>Linkki:</strong></th>";
    echo "</tr>";

    foreach ($hakutulos as $kurssi) {
        echo "<tr style='border-bottom: 1px solid;'>";
        echo "<td style='padding: 1em;'>" . trim($kurssi['Koulutus']) . "</td>";
        echo "<td style='padding: 1em;'>" . trim($kurssi['Oppilaitos']) . "</td>";
        echo "<td style='padding: 1em;'>" . trim($kurssi['Tutkintotyyppi']) . "</td>";
        echo "<td style='padding: 1em;'>";
        if ($kurssi['Linkki']) {
            echo "<a href='" . trim($kurssi['Linkki'], ' \n\r\t\v\0][)(}{"\'') . "'>ePerusteet</a>";
        } else {
            echo "";
        }    
        echo "</td>";
        echo "</tr>";
    }

    echo "</table><br><br>";

}

?>