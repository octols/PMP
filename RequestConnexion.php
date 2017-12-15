<?php
/**
 * Created by PhpStorm.
 * User: Moi
 * Date: 15/12/2017
 * Time: 10:27
 */
    //connect on ?ySQL
    $con = mysqli_connect('localhost','root','') or die(mysqli_error());
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
    }
      $uName = $_POST['username'];
      $pWord = $_POST['password'];

      $qry = "SELECT * FROM login WHERE mail='".$uName."' AND mdp='".$pWord."'";

      $res = mysqli_query($con, $qry);
      $num_row = mysqli_num_rows($res);
      //error_log($num_row);
      $row=mysqli_fetch_assoc($res);
      if( $num_row == 1 ) {
          session_start();
          $_SESSION['uName'] = $row['username'];
          $_SESSION['idlog'] = $row['idLogin'];
          $_SESSION['typelog'] = $row['type'];

          $query = "SELECT idUser FROM utilisateur WHERE idLogin=".$_SESSION['idlog']." ";

          $con->query($query);
          $res = mysqli_query($con, $query);
          $row = mysqli_fetch_array($res);
          $_SESSION['idUser'] = $row[0];
          echo 'true';
      }
      else {
          echo 'false';
      }
?>