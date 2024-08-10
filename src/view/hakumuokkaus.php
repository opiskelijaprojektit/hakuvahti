<?php $this->layout('template', ['title' => 'Muokkaus']) ?>


<h1>Hakusanat</h1>

<div class='hakusanat'>
<?php

foreach ($hakusanat as $hakusana) {


    echo "<div>";
        echo "<div>$hakusana[hakusana]</div>";
        echo "<form action='' method='POST'>";
            echo "<div>";
                echo "<input type='hidden' name='idkayttaja' value='$tunniste[idkayttaja]'>";
                echo "<input type='hidden' name='idhakusana' value='$hakusana[idhakusana]'>";
            echo "</div>";
            echo "<div>";
                echo "<input type='submit' name='poista' value='Poista' class='button'>";
            echo "</div>";
        echo "</form>";
    echo "</div>";
}

?>
</div>

<h1>Lisää hakusana</h1>

<form action="" method="POST">
    <?php echo "<input type='hidden' name='email' value='$tunniste[email]'>"; ?>
    <label for="hakusana">Haettu sana:</label>
    <input id="hakusana" type="text" name="hakusana" class="hakukentta">
    <div>
        <input type="submit" name="lisaa" value="Lisää haku" class="button">
    </div>
</form>
