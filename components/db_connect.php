<?php 

      $hostname = "localhost"; 
      $username = "root"; 
      $password = ""; 
      $dbname = "BE20_CR4_MomaGajdobranski_BigLibrary";

    $connect = mysqli_connect($hostname, $username, $password, $dbname);


  if(!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }
