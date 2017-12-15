<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','');
}
catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

$idExp = $bdd->prepare('SELECT INTO login(idLogin) where mail= exp');

$idDes = $bdd->prepare('SELECT INTO utilisateur(idLogin) where mail= exp');

$req = $bdd->prepare('INSERT INTO messagerie(idMessage, idUser1, idUser2, msg ) 
	VALUES(?,?,?,?)');

$req->execute(array(default,$_POST['idExp'],$_POST['idDes'],$_POST['msg']));
?>

