<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Studio MMI</title>
	<link rel="stylesheet" href="css/global.css" media="screen">
	<script src='js/jquery-1.12.4.min.js'></script>
	<script src="js/smoothScroll.js"></script>
	<script>
		function menu(){
			$('#phoneMenu').toggle("slow");
		}
	</script>
</head>

<body>

  <section id="header">
		<article>
			<img class="LogoMMI" src="img/logo-blanc.svg" alt="Logo Studio MMI">
			<img class="ScrollDown" src="img/scroll-down.png" alt="Défilez vers le bas">
		</article>
		<div class="triangle">
		</div>
	</section>
	<section id="menu">
		<article class="img">
			<img src="img/logo-vert.svg" alt="Logo Studio MMI">
		</article>
		<article class="menu">
			<nav class='nav computer'>
				<ul>
					<li><a href="#presentation" title="Studio">Studio</a></li>
					<li><a href="#materiel" title="Matériel">Matériel</a></li>
					<li><a href="#contact" title="Contact">Contact</a></li>
					<li class="picto">
						<img src="img/connexion.svg" alt="pictogramme connexion">
						<a href="#" title="Connexion">Connexion</a>
					</li>
				</ul>
			</nav>

			<nav class='nav phone'>
				<div id="hamburger" onclick="menu()">x</div>
				<ul id="phoneMenu">
					<li><a href="#presentation" title="Studio">Studio</a></li>
					<li><a href="#materiel" title="Matériel">Matériel</a></li>
					<li><a href="#contact" title="Contact">Contact</a></li>
					<li class="picto">
						<img src="img/connexion.svg" alt="pictogramme connexion">
						<a href="#" title="Connexion">Connexion</a>
					</li>
				</ul>
			</nav>
		</article>

	</section>
  <section id='presentation'>
    <article>
      <h2>Studio mmi c'est quoi ?</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat odio nec turpis ullamcorper finibus. Sed mollis est vel diam tincidunt, at aliquet magna efficitur. Quisque aliquet porttitor magna, sed tristique purus vestibulum eget. Praesent ut mattis tellus. Ut quis tempus velit. Duis vel tincidunt orci. Aenean vitae porta nunc. Nam lobortis et risus sit amet mollis. Duis suscipit tempus augue, sit amet congue metus dapibus vel. Aenean dui magna, dictum a iaculis in, auctor ac lacus. Praesent lobortis placerat lorem, sit amet vehicula nisi egestas et. Suspendisse auctor nisl in euismod commodo. Integer rutrum magna sit amet dignissim cursus. Morbi ac mi vitae arcu eleifend rhoncus vitae eu magna.
      </p>
    </article>
  </section>

	<section id='materiel'>
		<article>
			<div class="containerAppercuMateriel">
				<div class="appercuMateriel">
					<div class="image">
						<img id="mat1" src="img/iso-blanc.svg" alt="" />
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat odio nec turpis ullamcorper finibus.
					</p>
				</div>

				<div class="appercuMateriel">
					<div class="image">
						<img id="mat2" src="img/appareil.svg" alt="" />
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat odio nec turpis ullamcorper finibus.
					</p>
				</div>

				<div class="appercuMateriel">
					<div class="image">
						<img id="mat3" src="img/micro-blanc.svg" alt="" />
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat odio nec turpis ullamcorper finibus.
					</p>
				</div>
			</div>
			<p class="btn">
            <button type="button" name="button"><a href="materiel.php">Voir notre matériel</a></button>
			</p>
		</article>
	</section>


	<section id='contact'>
		<article>
			<form>
				<input type="text" placeholder="Nom" name="nom" value="">
				<input type="text" placeholder="Prenom" name="prenom" value="">
				<input type="text" placeholder="Societe" name="societe" value="">
				<input type="text" placeholder="Mail" name="mail" value="">
				<textarea placeholder="Message" name="message" value=""></textarea>
				<input type="submit" name="name" value="Envoyer">
			</form>
			<div>
				<h2>Studio MMI</h2>
				<p>
					9 rue de Québec
					<br /> 10430 Rosières-près-Troyes
					<br /> contact@studio3412.fr
					<br /> 0345768712
				</p>
			</div>
		</article>
	</section>

	<footer id="footer-index">
		<div>
			<img src="img/iut.jpg" alt="iut">
			<img src="img/canal32.jpeg" alt="canal32">
			<img src="img/tpz.png" alt="tpz">
		</div>
		<p><a href="www.troyespointzero.fr" target="_blank">© Troyes Point Zero</a> - Tout droits réservés.</p>
	</footer>
</body>

</html>
