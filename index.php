<?php
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
?>
/**
 * Created by PhpStorm.
 * User: Moi
 * Date: 15/12/2017
 * Time: 14:05
 */
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
    <!--[if lte IE 8]><script src="View/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="View/assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="View/assets/css/ie8.css" /><![endif]-->
</head>
<body class="homepage">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header-wrapper">
        <div id="header">

            <!-- Logo -->
            <h1><a href="index.php">Pimp my path</a></h1>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li class="current"><a href="index.php">Accueil</a></li>
                    <li><a href="View/Chercher.php">Chercher un trajet</a></li>
                </ul>
            </nav>

            <!-- Banner -->

            <section id="banner">
                <form action="Controller/RequestConnexion.php" method="post">
                    <input type="text" name="pseudo" placeholder="E-mail"/>
                    <input type="password" name="mdp" placeholder="Password"/>
                    <button type="submit" name="connexion">Connection</button><p>
                </form>
                        <a href="View/Chercher.html">Vous n'êtes pas encore inscrit ? </a>
                        <header>
                            <h2>En quoi consiste ce site ?</h2>
                    <p>Ce site est une plateforme communautaire payante de véhiculage. C'est une plateforme pour mettre en relation
                        des conducteurs et des passagers souhaitant partager un trajet et les frais assiciés</p>
                    </header>
            </section>

            <!-- Intro -->
            <section id="intro" class="container">
                <div class="row">
                    <div class="4u 12u(mobile)">
                        <section class="first">
                            <i class="icon featured fa-cog"></i>
                            <header>
                                <h2>Chercher un trajet</h2>
                            </header>
                            <p>Permet à un utilisateur de prévoir son voyage en sélectionnant le trajet qu'il veut parcourrir et
                                le mode de transport.</p>
                        </section>
                    </div>
                    <div class="4u 12u(mobile)">
                        <section class="middle">
                            <i class="icon featured alt fa-flash"></i>
                            <header>
                                <h2>Proposer un trajet</h2>
                            </header>
                            <p>Permet à un utilisateur de pouvoir proposer ses services tel que proposer un voyage mais aussi
                                de préciser si on peut y laisser des affaires sur places(par exemple un vélo).</p>
                        </section>
                    </div>
                    <div class="4u 12u(mobile)">
                        <section class="last">
                            <i class="icon featured alt2 fa-star"></i>
                            <header>
                                <h2>Mes trajets</h2>
                            </header>
                            <p>Permet à l'utilisateur de voir les trajets en cours mais aussi ceux effectués et donne la
                                possibilité de noter le trajet après l'avoir effectué.</p>
                        </section>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <!-- Main -->
    <div id="main-wrapper">
        <div class="container">

            <div class="row">

            </div>
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
