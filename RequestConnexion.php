<?php
/**
 * Created by PhpStorm.
 * User: Moi
 * Date: 18/12/2017
 * Time: 09:47
 */
    //connect on ?ySQL
    if (isset($_POST['connexion']) AND isset($_POST['pseudo']) AND isset($_POST['mdp'])) {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=projetphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $qry = "SELECT * FROM login WHERE mail='" . $_POST['pseudo'] . "' AND mdp='" . $_POST['mdp'] . "'";
        $res = $bdd->query($qry);
        $donnees=$res->fetch();

    if($donnees!=null) {
            //if ($num_row == 1) {
            session_start();
            $_SESSION['mail'] = $donnees['mail'];
            $_SESSION['idlog'] = $donnees['idLogin'];
            $_SESSION['typelog'] = $donnees['type'];
         }
        else{
            header('Location: index.php');
            exit();
        }
        $res->closeCursor();
        if($donnees!=null) {
            $query = "SELECT * FROM utilisateur WHERE idLogin=" . $_SESSION['idlog'] . " ";

            $reponse = $bdd->query($query);
            $donnees=$reponse->fetch();
             $_SESSION['idUser'] = $donnees['idUser'];
            $_SESSION['uPrenom'] = $donnees['prenom'];
            $_SESSION['uNom'] = $donnees['nom'];
            $_SESSION['note']= $donnees['note'];
            $_SESSION['argent']=$donnees['argent'];
            header('Location: ../View/Profil.php');
            exit();
        } else {
            header('Location: index.php');
            exit();
        }
        $reponse->closeCursor();
    }
?>
