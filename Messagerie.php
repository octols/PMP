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
    <title>PMP - Messagerie</title>
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
            <div id="deco"  align="right"><button class="deco" onClick="window.location.href='../index.html'">Deconnexion</button><p></div>
            <h1><a href="#">Messagerie</a></h1>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="Profil.php">Mon profil</a></li>
                    <li><a href="Chercher2.php">Chercher un trajet</a></li>
                    <li><a href="Proposer.php">Proposer un trajet</a></li>
                    <li><a href="Proposer.php">Mes trajets</a></li>
                    <li class="current"><a href="Messagerie.php">Messagerie</a></li>
                </ul>
            </nav>

        </div>
    </div>
    <article class="box post
                  <div class="onglet">
    <a href="messagerie.php"><input type="button" name="Répondre" value="Nouveau message :"/></a>
    <a href="msgr.php"><input type="button" name="Répondre" value="Message reçues :"/></a>
    <a href="msge.php"><input type="button" name="Répondre" value="Message envoyés :"/></a>
</div>
</article>
<!-- Main -->
<div id="main-wrapper">
    <div class="container">

        <form action="../Model/messagerie2.php" method="post">
            <p>
            <p><strong>Votre adresse Mail: </strong>
                <input type="text" name="exp" /></p>

            <p><strong>Adresse Mail destinataire: </strong>
                <input type="text" name="destinataire" /></p>

            <p><strong>Message :</strong><br>
                <textarea type="text" name="msg" cols="50" rows="10"></textarea></p>

            <br>  <br>  <br>
            <input type="submit" value="Envoyer" />

            </p>
        </form>
        <!-- Content -->

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
<?php }

else {

    header("Location: ../index.php");
}

?>