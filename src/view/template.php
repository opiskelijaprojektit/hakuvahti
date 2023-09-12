<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Hakuvahti - <?=$this->e($title)?></title>
    <meta charset="UTF-8">
    <link href="styles/styles.css" rel="stylesheet">    
  </head>
  <body>
  <header>
    <h1><a href="<?=BASEURL?>">Hakuvahti</a></h1>
  </header>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>hakuvahti by kouluprojekti</div>
    </footer>
  </body>
</html>