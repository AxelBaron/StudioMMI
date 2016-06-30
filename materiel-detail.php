<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Studio MMI</title>
	<link rel="stylesheet" href="css/global.css">
</head>

<body>
	<div id='test'>
	<section class="menu fix">
		<article class="img">
          <a href="index.php"><img src="img/logo-vert.svg" alt="Logo Studio MMI"></a>
		</article>
		<article class="menu">
			<nav class='nav computer'>
				<ul>
					<li><a href="index.php#presentation" title="Studio">Studio</a></li>
					<li><a href="index.php#materiel" title="Matériel">Matériel</a></li>
					<li><a href="index.php#contact" title="Contact">Contact</a></li>
				</ul>
			</nav>
			<div id="hamburger" onclick="menu()"><img src='img/hamburger.png'</div>
		</article>
	</section>
	<section class='phoneMenu'>
		<article>
			<nav>
				<ul>
					<li><a href="#presentation" title="Studio">Studio</a></li>
					<li><a href="#materiel" title="Matériel">Matériel</a></li>
					<li><a href="#contact" title="Contact">Contact</a></li>
				</ul>
			</nav>
		</article>
	</section>

	<section id="detail-produit">
        <article class="liste">
	       <h2>MATÉRIEL</h2>
           <p><a href="materiel-detail.php" class="actif">Camera Blackmagic 4K</a></p>
           <p><a href="">Pied Miller Pro</a></p>
           <p><a href="">Micro HF</a></p>
           <p><a href="">Objectif ciné</a></p>
           <p><a href="">Pack 3 mandarines</a></p>
           <p><a href="">Blonde</a></p>
           <p><a href="">Panneau Led</a></p>
           <p><a href="">Staibilisateur "Ronin"</a></p>
           <p><a href="">Perche son</a></p>
           <p><a href="">Mélangeur ATEM</a></p>
           <p><a href="">Régie complète</a></p>
           <p><a href="">Camera JVC HM 700</a></p>
           <p><a href="">Canon 5D mark II</a></p>
           <p><a href="">Pied manfrotto</a></p>
           <p><a href="">Follow Focus HF</a></p>
           <p><a href="">Banc de montage 4K</a></p>
           <!-- faire appel liste matériel -->
	    </article>
        <article class="description">
           <h2>Camera Blackmagic 4K</h2> <!-- remplacer par appel php du nom -->
					 <div class="">
						 <div class="txt"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora veniam assumenda vero impedit. Perspiciatis sapiente sint laboriosam, minus porro hic, provident, cupiditate a mollitia molestias reiciendis magni ab ratione, dolore.</p><br/><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolorem labore ipsa cupiditate, consequuntur repudiandae voluptatem, quod facere cum a iste, laborum recusandae velit autem ipsum tempore. Laudantium, molestias, sequi!</p></div><!-- Appel php description -->
             <div class="img"><img src="img/camera-black-magic.jpg" alt=""> <!-- Appel img --></div>
					 </div>
					 <h2 class="prix">100€/jour</h2>
	    </article>
	</section>


	<footer id="footer-commun">
		<p>Liste non exhaustive, d'autres matériels peuvent être loués sur demande.<br/><a href="troyespointzero.fr">© Troyes Point Zero</a> - Tout droits réservés.</p>
	</footer>
</div>
</body>

</html>
