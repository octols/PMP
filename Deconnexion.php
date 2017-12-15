<?php
/**
 * Created by PhpStorm.
 * User: Moi
 * Date: 15/12/2017
 * Time: 10:03
 */

function ResetSession(){
    session_start();

// Suppression des variables de session et de la session
    $_SESSION = array();
    session_destroy();
    header('Location: index.html');
    exit();
}

?>
