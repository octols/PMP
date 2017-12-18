<?php
session_start();

if(isset($_SESSION['mail']) && !empty($_SESSION['typelog']))
{

?>
<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pimp my path</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
	</head>
	
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->

				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
							
							<div id="deco"  align="right"><button class="deco" onClick="window.location.href='../index.php'">Deconnexion</button><p></div>
							<h1><a href="#">Pimp my path</a></h1>
							

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="Profil.php">Mon profil</a></li>
									<li><a href="Chercher2.php">Chercher un trajet</a></li>
									<li><a href="Proposer.php">Proposer un trajet</a></li>
									<li><a href="Mestrajets.php">Mes trajets</a></li>
									<li><a href="Messagerie.php">Messagerie</a></li>
								</ul>
							</nav>

						<!-- Banner -->

								<header>

								</header>


					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
                        <?php if($_SESSION['typelog']==="user"){  ?>
						    <div class="row">
                                <p> Bienvenue sur votre profil : <?php echo $_SESSION['uNom'] ?> <?php echo $_SESSION['uPrenom'] ?> </p>
                            </div>
                            <div class="row">
                                <p>Adresse Mail : <?php echo $_SESSION['mail'] ?></p>
                            </div>
                            <div class="row">
                                <p>Note : <?php echo $_SESSION['note'] ?></p>
                            </div>
                            <div class="row">
                                <p>Argent : <?php echo $_SESSION['argent'] ?></p>
						    </div>
                        <?php }
                        if($_SESSION['typelog']==="admin"){
                        ?>
                            <div class="row">
                                <p> Bienvenue sur le panel Admin </p>
                            </div>
                        <?php }?>
					</div>
				</div>
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
<?php }

else {

    header("Location: ../index.php");
}

?>