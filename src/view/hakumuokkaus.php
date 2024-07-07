<?php $this->layout('template', ['title' => 'Muokkaus']) ?>


<h1>Hakusanat</h1>

<div class='hakusanat'>
<?php

foreach ($hakusanat as $hakusana) {


    echo "<div>";
        //echo "<div>$hakusana[idhakusana]</div>";
        //echo "<div>$hakusana[idkayttaja]</div>";
        echo "<div>$hakusana[hakusana]</div>";
        echo "<form action='' method='POST'>";
            echo "<div>";
                echo "<input type='hidden' name='idkayttaja' value='$tunniste[idkayttaja]'>";
                echo "<input type='hidden' name='idhakusana' value='$hakusana[idhakusana]'>";
            echo "</div>";
            echo "<div>";
                echo "<input type='submit' name='poista' value='Poista'>";
            echo "</div>";
        echo "</form>";
        //echo "<div>$hakusana[aika]</div>";
    echo "</div>";
}

?>
</div>
