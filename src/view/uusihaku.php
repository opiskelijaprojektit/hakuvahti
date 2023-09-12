<?php $this->layout('template', ['title' => 'Haku']) ?>

<h1>Lisää haku</h1>

<form action="" method="POST">
  <div>
    <label for="hakusana">haettu sana:</label>
    <input id="hakusana" type="text" name="hakusana">
  </div>
  <div>
    <label for="email">sähköposti:</label>
    <input id="email" type="text" name="email">
  </div>
  <div>
    <input type="submit" name="laheta" value="Lisää haku">
  </div>
</form>