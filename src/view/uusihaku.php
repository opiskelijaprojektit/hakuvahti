<?php $this->layout('template', ['title' => 'Haku']) ?>

<div class="content_box">
  <h2>Lisää haku</h2>
  <div>
    <form action="" method="POST" class="input_form">
      <table>
        <h3><label for="hakusana">Haettu sana:</label></h3>
        <input id="hakusana" type="text" name="hakusana" class="input_field">
        <h3><label for="email">Sähköposti:</label></h3>
        <input id="email" type="text" name="email" class="input_field">
      </table>
      <div>
        <input type="submit" name="laheta" value="Lisää haku" class="button">
      </div>
    </form>
  </div>
</div>