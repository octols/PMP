<?php
/**
 * Created by PhpStorm.
 * User: Moi
 * Date: 15/12/2017
 **/

function CheckPage()
{
    session_start();

    if (isset($_SESSION['uName']) && !empty($_SESSION['uName'])) {

        /*page a verifier*/

    } else {

        header("Location: index.html");
    }
}
?>