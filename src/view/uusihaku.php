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
    <td><input id="hakusana" type="text" name="hakusana"></td>
  </tr>
  <tr>
    <td><label for="email">Sähköposti:</label></td>
    <td><input id="email" type="text" name="email"></td>
  </tr>
</table>
  <div>
    <input type="submit" name="laheta" value="Lisää haku">
  </div>
</form>
