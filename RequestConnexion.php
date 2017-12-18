<?php
/**
 * Created by PhpStorm.
 * User: Moi
 * Date: 18/12/2017
 * Time: 09:47
 */
    /*$con = mysqli_connect('localhost','root','') or die(mysqli_error());
    if (!$con) {
        error_log("Unable to connect to DB: " . mysqli_error());
        exit;
    }

    if (!$con) {
        error_log("Unable to connect to DB: " . mysqli_error());
        exit;
    }

    if (!mysqli_select_db($con, "projetphp")) {
        error_log("Unable to select mydbname: " . mysqli_error());
        exit;
    }*/
    if (isset($_POST['connexion']) AND isset($_POST['pseudo']) AND isset($_POST['mdp'])) {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=projetphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $qry = "SELECT * FROM login WHERE mail='" . $_POST['pseudo'] . "' AND mdp='" . $_POST['mdp'] . "'";
        $res = $bdd->query($qry);
        $donnees=$res->fetch();
        /*$res = mysqli_query($bdd, $qry);
        $num_row = mysqli_num_rows($res);
        //error_log($num_row);
        $row = mysqli_fetch_assoc($res);*/
        if($donnees!=null) {
            //if ($num_row == 1) {
            session_start();
            $_SESSION['mail'] = $donnees['mail'];
            $_SESSION['idlog'] = $donnees['idLogin'];
            $_SESSION['typelog'] = $donnees['type'];
            /*$_SESSION['mail'] = $row['mail'];
            $_SESSION['idlog'] = $row['idLogin'];
            $_SESSION['typelog'] = $row['type'];*/
        }
        else{
            header('Location: ../index.php');
            exit();
        }
        $res->closeCursor();

            $query = "SELECT * FROM utilisateur WHERE idLogin=" . $_SESSION['idlog'] . " ";

            $reponse = $bdd->query($query);
            $donnees=$reponse->fetch();
            /*$res = mysqli_query($bdd, $query);
            $num_row = mysqli_num_rows($res);
            //error_log($num_row);
            $row = mysqli_fetch_assoc($res);*/
        if($donnees!=null) {
            $_SESSION['idUser'] = $donnees['idUser'];
            $_SESSION['uPrenom'] = $donnees['prenom'];
            $_SESSION['uNom'] = $donnees['nom'];
            $_SESSION['note']= $donnees['note'];
            $_SESSION['argent']=$donnees['argent'];
            /*$_SESSION['idUser'] = $row['idUser'];
            $_SESSION['uPrenom'] = $row['prenom'];
            $_SESSION['uNom'] = $row['nom'];*/

            header('Location: ../View/Profil.php');
            exit();
        } else {
            header('Location: ../index.php');
            exit();
        }
        $reponse->closeCursor();
    }

?>
