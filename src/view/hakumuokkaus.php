<?php $this->layout('template', ['title' => 'muokkaus']) ?>

<div class="content_box">

    <h2>Hakusanat</h2>
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
                    echo "<input type='submit' name='poista' value='Poista' class='text_link'>";
                echo "</div>";
            echo "</form>";
            //echo "<div>$hakusana[aika]</div>";
        echo "</div>";
    }

    ?>


    <h2 class="form_title">Lisää hakusana</h2>
    <form action="" method="POST" class="form">
        <?php echo "<input type='hidden' name='email' value='$tunniste[email]'>"; ?>       
        <svg class="form_item_1 icon" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"><path d="M12.237 7a4.999 4.999 0 10-9.998-.001 4.999 4.999 0 009.998 0zm-.965 5.096A6.498 6.498 0 01.739 7 6.497 6.497 0 017.237.5a6.498 6.498 0 015.096 10.533l4.184 4.184a.75.75 0 01-1.06 1.06l-4.186-4.181z"/></svg>
        <span class="screen-reader-text">
        Suurennuslasi ikoni</span>
        <input id="hakusana" type="text" name="hakusana" placeholder="Lisää sana" class="form_item_2 input_field">
    </form>
</div>

<!--<h1>Lisää hakusana</h1>

<form action="" method="POST">
    <label for="hakusana">Haettu sana:</label>
    <input id="hakusana" type="text" name="hakusana" class="hakukentta">
    <div>
        <input type="submit" name="lisaa" value="Lisää haku" class="button">
    </div>
</form>-->