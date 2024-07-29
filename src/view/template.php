<!DOCTYPE html>
<html lang="fi">
	<head>
		<title>Hakuvahti - <?=$this->e($title)?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta charset="UTF-8">
		<link href="public/styles/styles.css" rel="stylesheet">    
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="/~mniska/hakuvahti/img/favicon-445418d420.svg">
	</head>
	<body>
		<main>
			<header class="header">
				<img src="img/sasky-logo-1.svg" alt="Sasky Logo" class="sasky_logo">
				<div class="title">
					<h1><a href="<?=BASEURL?>" class="title_link">Hakuvahti</a></h1>
				</div>
			</header>
			<section>
				<?=$this->section('content')?>
			</section>
			<footer class="footer">
				<div class="sasky_logo">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 153 68" fill="none" width="120" height="54" class="margin-off header__logo-image" role="img" focusable="false"><path d="M.58 44.393h8.36v7.095c0 4.446 1.52 6.338 4.18 6.338 2.66 0 3.99-1.892 3.99-6.338-.096-5.582-1.616-8.798-7.126-14.663-4.94-5.298-7.505-9.46-8.645-14.19-.475-1.893-.665-3.974-.665-6.15C.674 6.268 5.044.308 13.12.308s12.16 5.771 12.16 16.366v5.96h-7.884v-6.622c0-4.446-1.426-6.433-4.18-6.433-2.756 0-4.18 2.082-4.18 6.339 0 2.365.474 4.446 1.71 6.716 1.14 2.082 2.85 4.352 5.51 7.19 6.84 7.284 9.025 12.298 9.215 20.812 0 10.028-3.895 16.65-12.446 16.65-8.55 0-12.445-5.865-12.445-16.65v-6.243zM30.536 67.16L38.041.381h12.73l7.41 66.782h-7.6l-1.425-12.976h-9.595l-1.425 12.976h-7.6v-.003zm10.07-21.846h7.6l-3.8-34.06-3.8 34.06zm22.643-.921h8.36v7.095c0 4.446 1.52 6.338 4.18 6.338 2.66 0 3.99-1.892 3.99-6.338-.095-5.582-1.615-8.798-7.125-14.663-4.94-5.298-7.505-9.46-8.645-14.19-.475-1.893-.665-3.974-.665-6.15 0-10.217 4.37-16.177 12.445-16.177 8.076 0 12.16 5.771 12.16 16.366v5.96h-7.885v-6.622c0-4.446-1.425-6.433-4.18-6.433s-4.18 2.082-4.18 6.339c0 2.365.475 4.446 1.71 6.716 1.14 2.082 2.85 4.352 5.51 7.19 6.84 7.284 9.025 12.298 9.215 20.812 0 10.028-3.894 16.65-12.445 16.65-8.55 0-12.445-5.865-12.445-16.65v-6.243zM122.052.29l-10.45 33.198 10.618 33.735h-10.121l-8.956-31.064v31.004h-8.36V.384h8.36v30.43L111.89.29h10.165-.003zm5.636.091h8.361v35.394c0 4.484 1.52 6.392 4.18 6.392 2.66 0 4.275-1.908 4.275-6.392V.38h8.075v50.278c0 10.781-4.18 16.504-12.445 16.504h-11.496v-9.539h11.401c2.66 0 4.465-1.907 4.465-6.486v-.095c-1.33.476-2.755.669-4.37.669-8.17 0-12.446-5.916-12.446-16.792V.381z" fill="#2B4D6E"></path><title>SASKY koulutuskunta­yhtymä</title></svg></div>
					<p>SASKY koulutuskuntayhtymä<br>
					Ratakatu 36<br>
					38210 Sastamala</p>
				<div class="footer__social-links">
					<a href="https://www.facebook.com/sasky.fi" class="d-flex justify-content-center align-items-center position-relative footer__social-links-link">
					<span class="screen-reader-text">
						SASKY koulutuskuntayhtymä Facebookissa</span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" fill="none" aria-hidden="true" focusable="false" width="35" height="35" class="flex-shrink-0 footer__social-links-icon footer__social-links-icon--facebook"><circle cx="17.262" cy="17.65" r="17.262" fill="#FF9AB0"></circle><g clip-path="url(#a)"><path d="M21.12 18.212l.488-3.076h-3.056v-1.997c0-.841.427-1.662 1.796-1.662h1.39v-2.62s-1.262-.207-2.467-.207c-2.517 0-4.162 1.473-4.162 4.141v2.345H12.31v3.076h2.798v7.438h3.443v-7.438h2.567z" fill="#000"></path></g><defs><clipPath id="a"><path fill="#fff" d="M11.524 8.65h11v17h-11z"></path></clipPath></defs></svg>		</a>
					
					<a href="https://www.instagram.com/saskyofficial" class="d-flex justify-content-center align-items-center position-relative footer__social-links-link">
					<span class="screen-reader-text">
						SASKY koulutuskunta­yhtymä Ins­ta­gra­mis­sa			</span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 35" fill="none" aria-hidden="true" focusable="false" width="35" height="35" class="flex-shrink-0 footer__social-links-icon footer__social-links-icon--instagram"><circle cx="17.786" cy="17.65" r="17.262" fill="#FF9AB0"></circle><path d="M17.788 13.162c-2.555 0-4.616 2.004-4.616 4.488 0 2.484 2.06 4.488 4.616 4.488 2.555 0 4.617-2.004 4.617-4.488 0-2.484-2.062-4.488-4.617-4.488zm0 7.406c-1.651 0-3.001-1.309-3.001-2.918 0-1.61 1.346-2.918 3.001-2.918 1.655 0 3.002 1.309 3.002 2.918 0 1.61-1.35 2.918-3.002 2.918zm5.882-7.59c0 .582-.482 1.047-1.077 1.047a1.06 1.06 0 01-1.076-1.047c0-.578.482-1.047 1.076-1.047.595 0 1.077.469 1.077 1.047zm3.058 1.063c-.068-1.403-.398-2.645-1.455-3.668-1.052-1.024-2.33-1.344-3.772-1.414-1.487-.082-5.943-.082-7.43 0-1.438.066-2.716.386-3.772 1.41-1.057 1.023-1.382 2.265-1.455 3.668-.084 1.445-.084 5.777 0 7.222.069 1.403.398 2.645 1.455 3.668 1.056 1.024 2.33 1.344 3.773 1.414 1.486.082 5.942.082 7.429 0 1.442-.066 2.72-.386 3.772-1.414 1.053-1.023 1.383-2.265 1.455-3.668.084-1.445.084-5.773 0-7.218zm-1.92 8.77a2.998 2.998 0 01-1.712 1.663c-1.186.457-3.998.352-5.308.352-1.31 0-4.126.101-5.308-.352a2.997 2.997 0 01-1.711-1.664c-.47-1.152-.362-3.886-.362-5.16 0-1.273-.104-4.012.362-5.16a2.998 2.998 0 011.711-1.664c1.186-.457 3.998-.352 5.308-.352 1.31 0 4.127-.101 5.308.352a2.998 2.998 0 011.711 1.664c.47 1.152.362 3.887.362 5.16 0 1.274.108 4.012-.362 5.16z" fill="#000"></path></svg>		</a>
					
					<a href="https://twitter.com/SASKY_official" class="d-flex justify-content-center align-items-center position-relative footer__social-links-link">
					<span class="screen-reader-text">
						SASKY koulutuskunta­yhtymä X:ssä			</span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" fill="none" aria-hidden="true" focusable="false" width="35" height="35" class="flex-shrink-0 footer__social-links-icon footer__social-links-icon--x"><circle cx="17.31" cy="17.65" r="17.262" fill="#FF9AB0"></circle><path d="M21.817 10.565h2.405l-5.253 6.002 6.18 8.169H20.31l-3.791-4.954-4.333 4.954H9.778l5.618-6.422-5.924-7.75h4.96l3.423 4.528 3.962-4.527zm-.845 12.733h1.332l-8.598-11.37h-1.43l8.696 11.37z" fill="#000"></path></svg>		</a>
					
					<a href="https://www.youtube.com/user/SASKYKKY/feed" class="d-flex justify-content-center align-items-center position-relative footer__social-links-link">
					<span class="screen-reader-text">
						SASKY koulutuskunta­yhtymä You­Tu­bes­sa			</span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" fill="none" aria-hidden="true" focusable="false" width="35" height="35" class="flex-shrink-0 footer__social-links-icon footer__social-links-icon--youtube"><path d="M17.262 34.912c9.534 0 17.262-7.729 17.262-17.262 0-9.534-7.729-17.262-17.262-17.262C7.728.388 0 8.116 0 17.65s7.728 17.262 17.262 17.262z" fill="#FF9AB0"></path><path d="M25.645 13.87a2.134 2.134 0 00-1.503-1.512C22.816 12 17.5 12 17.5 12s-5.316 0-6.642.358a2.134 2.134 0 00-1.503 1.513C9 15.206 9 17.988 9 17.988s0 2.783.355 4.118a2.1 2.1 0 001.503 1.488c1.326.358 6.642.358 6.642.358s5.316 0 6.642-.358a2.106 2.106 0 001.503-1.488C26 20.771 26 17.988 26 17.988s0-2.782-.355-4.117zm-9.882 6.646V15.46l4.442 2.527-4.442 2.528z" fill="#000"></path></svg>		</a>
					
					<a href="https://www.linkedin.com/school/sasky-koulutuskuntayhtyma" class="d-flex justify-content-center align-items-center position-relative footer__social-links-link">
					<span class="screen-reader-text">
						SASKY koulutuskunta­yhtymä Lin­ke­dI­nis­sä			</span>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" fill="none" aria-hidden="true" focusable="false" width="35" height="35" class="flex-shrink-0 footer__social-links-icon footer__social-links-icon--linkedin"><circle cx="17.358" cy="17.65" r="17.262" fill="#FF9AB0"></circle><path d="M14.044 22.9h-2.488v-8.18h2.488v8.18zM12.8 13.606c-.795 0-1.44-.673-1.44-1.485 0-.39.151-.764.421-1.04s.637-.431 1.019-.431c.382 0 .749.155 1.019.43.27.277.422.65.422 1.04 0 .813-.646 1.486-1.441 1.486zM23.355 22.9h-2.482v-3.981c0-.95-.019-2.166-1.293-2.166-1.294 0-1.492 1.03-1.492 2.097v4.05h-2.485v-8.18h2.386v1.116h.035c.332-.643 1.143-1.32 2.354-1.32 2.517 0 2.98 1.692 2.98 3.89V22.9h-.003z" fill="#000"></path></svg>		</a>
				</div>
				<div class="footer__bottom">
					<a href="https://sasky.fi/sasky/tietosuojaseloste/" class="">
						<svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none" aria-hidden="true" focusable="false" class="pwd-link__icon"><path d="M12.225 4.654L9.108 7.77a.75.75 0 01-1.096 0 .75.75 0 010-1.096l1.777-1.802H.78A.77.77 0 010 4.093c0-.413.34-.778.78-.778h9.01L8.011 1.537a.75.75 0 010-1.096.75.75 0 011.095 0l3.118 3.117a.75.75 0 010 1.096z" fill="currentColor"></path></svg>
					Tietosuoja</a>
					<a href="https://sasky.fi/evastekaytannot/" class="">
						<svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none" aria-hidden="true" focusable="false" class="pwd-link__icon"><path d="M12.225 4.654L9.108 7.77a.75.75 0 01-1.096 0 .75.75 0 010-1.096l1.777-1.802H.78A.77.77 0 010 4.093c0-.413.34-.778.78-.778h9.01L8.011 1.537a.75.75 0 010-1.096.75.75 0 011.095 0l3.118 3.117a.75.75 0 010 1.096z" fill="currentColor"></path></svg>
					Evästekäytännöt</a>
				</div>
					<p>&#169; SASKY 2024</p>
				<div>
			</footer>
		</main>	
	</body>
</html>
