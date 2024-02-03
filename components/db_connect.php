<?php 

      $hostname = "5.189.178.173"; 
      $username = "momacodefactory"; 
      $password = "Z?un{N;32rvE"; 
      $dbname = "momacodefactory_cr4";

    $connect = mysqli_connect($hostname, $username, $password, $dbname);


  if(!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }
