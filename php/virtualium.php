<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Virtualium - Sealion</title>
		<meta charset="utf-8"/>
		<link rel="shortcut icon" type="image/x-icon" href="../images/logo.png"/>
		<link rel="stylesheet" type="text/css" href="../css/colors-light.css">
		<link rel="stylesheet" type="text/css" href="../css/font.css">
		<link rel="stylesheet" type="text/css" href="../css/default.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
	</head>

	<body onload="AutoPlay()" class="width_full height_full">

		<header>
			<div id="h-landscape" class="landscape transition">
				<div class="width_100 height_100 flex_row justify_between transition">
					<div id="identity" class="flex_row justify_start height_100">
						<div id="id-img" class="height_90 transition">
							<div class="width_100 height_100"></div>
							<img class="height_100 width_auto" src="../images/logo_alpha.png">
						</div>
						<div id="id-title" class="f-cano">
							<h1>SEALION<span class="h-arrow transition">►</span><span class="page-title transition">VIRTUALIUM</span></h1>
							<h2 class="transition">SOFTWARE</h2>
						</div>
					</div>
					<div id="buttons" class="flex_row f-cano height_100">
						<a class="h-button flex_column justify_around height_100 h-b-select transition">
							<img class="imgHue" src="../images/fish.png">
							VIRTUALIUM
						</a>
						<a class="h-button flex_column justify_around height_100 transition">
							<img class="imgHue" src="../images/3d.png">
							3D WEB
						</a>
					</div>
				</div>
			</div>

			<div id="h-portrait" class="portrait transition">
				<div class="width_100 height_100 flex_row justify_between transition">
					<div id="identity" class="flex_row justify_start height_100">
						<div id="id-img" class="height_90 transition">
							<div class="width_100 height_100"></div>
							<img class="height_100 width_auto" src="../images/logo_alpha.png">
						</div>
						<div id="id-title" class="f-cano">
							<h1 class="transition">SEALION<span class="h-arrow transition">►</span><span class="page-title transition">VIRTUALIUM</span></h1>
							<h2 class="transition">SOFTWARE</h2>
						</div>
					</div>
					<div id="buttons" class="flex_row f-cano height_100">
						<a class="h-button flex_column justify_around height_100 h-b-select transition">
							<img class="imgHue" src="../images/fish.png">
						</a>
						<a class="h-button flex_column justify_around height_100 transition">
							<img class="imgHue" src="../images/3d.png">
						</a>
					</div>
				</div>
			</div>
		</header>

		<div id="content" class="width_100 height_auto flex_column">

			<div id="content-video">
				<video id="showcase" class="width_100 height_auto" autoplay loop muted>
				    <source src="../videos/aquarium.mp4" type="video/mp4">
				</video>
				<div class="width_100 height_100"></div>
			</div>

			<h1 class="f-ultraLight">Qu'est ce que <span class="f-cano">Virtualium</span> ?</h1>

			<p class="width_70 f-simpleText">Ce projet consiste en la création d'environnements virtuels intéractifs à thème. Le but est de répondre à un besoin de divertissement dans des situations peu attractives.</p>

			<p class="width_70 f-simpleText margin_top_20p">Besoin de divertir les enfants au restaurant, besoin de réduire le stress d'un patient dans une salle d'attente, besoin d'attirer les curieux sur un salon, besoin d'une expérience nouvelle dans un musée... <a href="#" class="f-cano">Virtualium</a> est la solution !</p>

			<div class="landscape width_100">
				<div class="width_100 flex_column">
					<div class="flex_row justify_between width_60 perspective">
						<div class="flex_column">
							<h1 class="f-ultraLight">Qui sommes <span class="f-cano">nous</span> ?</h1>

							<p class="width_70 f-simpleText margin_top_20p">Nous sommes trois étudiants de l'école de Jeux Vidéos et Serious Games <a href="https://ludus-academie.fr/" class="f-cano" target="blank" alt="Lien vers le site de l'école Ludus Academie">Ludus Academie</a>. Nous avons acquis lors de notre formation de nombreuses compétences dans le domaine du média intéractif et le 10e art. Ces compétences nous permettent de réaliser toutes sortes de solutions innovantes et pertinantes pouvant répondre à vos besoins.</p>
						</div>
						<img src="../images/crew.png" class="shadowed width_50 tr_lf_30" alt="photo de l'équipe de développement">
					</div>
				</div>
			</div>
			
			<div class="portrait width_100">
				<div class="flex_column width_100">
					
					<h1 class="f-ultraLight">Qui sommes <span class="f-cano">nous</span> ?</h1>

					<img src="../images/crew.png" class="shadowed width_50 tr_lf_10" alt="photo de l'équipe de développement">

					<p class="width_70 f-simpleText margin_top_20p">Nous sommes trois étudiants de l'école de Jeux Vidéos et Serious Games <a href="https://ludus-academie.fr/" class="f-cano" alt="Lien vers le site de l'école Ludus Academie">Ludus Academie</a>. Nous avons acquis lors de notre formation de nombreuses compétences dans le domaine du média intéractif et le 10e art. Ces compétences nous permettent de réaliser toutes sortes de solutions innovantes et pertinantes pouvant répondre à vos besoins.</p>

				</div>

			</div>
			

		</div>

		<footer></footer>
	</body>

	<script>
		function AutoPlay(){
			document.getElementById('showcase').play();
		}

		window.addEventListener("scroll", function(){
			headerL = document.getElementById("h-landscape");
			headerP = document.getElementById("h-portrait");

			if (window.scrollY == 0){
				headerL.classList.remove('h-thin');
				headerP.classList.remove('h-thin');
			}
			else{
				headerL.classList.add('h-thin');
				headerP.classList.add('h-thin');
			}
		});

	</script>

</html>