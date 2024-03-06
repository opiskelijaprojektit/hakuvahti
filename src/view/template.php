<!DOCTYPE html>
<html lang="fi">
	<head>
		<title>Hakuvahti - <?=$this->e($title)?></title>
		<meta charset="UTF-8">
		<link href="styles/styles.css" rel="stylesheet">    
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="/~mniska/hakuvahti/img/favicon-445418d420.svg">
	</head>
	<body>
		<header class="saskygray">
			<h1><a href="<?=BASEURL?>">Hakuvahti</a></h1>
<img src="img/sasky-logo-1.svg" alt="Sasky Logo" width="60" height="100%">
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
