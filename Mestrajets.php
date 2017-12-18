<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>PMP - Mes trajets</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/onglet.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="deco"  align="right"><button class="deco" onClick="window.location.href='Profil.html'">Deconnexion</button><p></div>
							<h1><a href="#">Mes trajets</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="profil.html">Mon profil</a></li>
									<li><a href="Chercher2.html">Chercher un trajet</a></li>
									<li><a href="Proposer.html">Proposer un trajet</a></li>
									<li class="current"><a href="Mestrajets.html">Mes trajet</a></li>
									<li><a href="Messagerie.php">Messagerie</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">

						<!-- Content -->
							<article class="box post">

									<div class="onglet">
									  <button class="tablinks" onclick="openCity(event, 'trajetencour')">Trajet en cours : </button>
									  <button class="tablinks" onclick="openCity(event, 'trajettermine')">Trajet terminés</button>
									</div>

									<div id="trajetencour" class="ongletcontent">
									  <h3>Trajet cours</h3>
									  <p>test</p>
									</div>

									<div id="trajettermine" class="ongletcontent">
									  <h3>Trajet terminé</h3>
									  <p>test 2</p> 
									</div>
									
									<script>
									// pris sur w3school
											function openCity(evt, cityName) {
												var i, tabcontent, tablinks;
												tabcontent = document.getElementsByClassName("ongletcontent");
												for (i = 0; i < tabcontent.length; i++) {
													tabcontent[i].style.display = "none";
												}
												tablinks = document.getElementsByClassName("tablinks");
												for (i = 0; i < tablinks.length; i++) {
													tablinks[i].className = tablinks[i].className.replace(" active", "");
												}
												document.getElementById(cityName).style.display = "block";
												evt.currentTarget.className += " active";
											}
									</script>	
							</article>

					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<section id="footer" class="container">
						<div class="row">
							<div class="8u 12u(mobile)">
								<section>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Untitled. All rights reserved.</li>
										</ul>
									</div>

							</div>
						</div>
					</section>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>