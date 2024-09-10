<?php $this->layout('template', ['title' => 'Haku']) ?>

<h1>Lisää haku</h1>

<form action="" method="POST">
<table>
  <tr>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td><label for="hakusana">Haettu sana:</label></td>
    <td><input id="hakusana" type="text" name="hakusana" class="hakukentta"></td>
  </tr>
  <tr>
    <td><label for="email">Sähköposti:</label></td>
    <td><input id="email" type="text" name="email" class="spostikentta"></td>
  </tr>
</table>
  <div>
    <input type="submit" name="laheta" value="Lisää haku" class="button">
  </div>
</form>
