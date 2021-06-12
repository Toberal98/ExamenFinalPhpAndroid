<?php

    function conectar(){
      $servername = "localhost";
      $database = "examenFinalProgramacionMoviles";
      $username = "root";
      $password = "root";
      // Create connection
      $con = mysqli_connect($servername, $username, $password, $database);
      // Check connection
      if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
      }


    return  $con;
    }
?>
