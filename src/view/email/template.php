<!----------------------------------------->
<!--------- @author Annastiina Koivu------->
<!--------- @author Ville Kähkönen--------->
<!----------------------------------------->

<!DOCTYPE html>
<html lang="fi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hakuvahti</title>
</head>


<body style="font-family: 'Open Sans', sans-serif; max-width: 600px; margin: 0 auto; height: auto; padding: 15px; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; margin: 10px;">
  <header>
    <h1 style="font-size: 32px; text-align: center;">Hakuvahti ilmoittaa</h1>
  </header>
  <main>
    <?=$this->section('content')?>
  </main>
  <footer>
    <p style="text-align: center;">Terveisin:</p>
    <p style="text-align: center;">Hakuvahtipalvelu</p>
  </footer>
</body>

</html>