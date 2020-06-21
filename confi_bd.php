<?php
  $db_host ="us-cdbr-east-06.cleardb.net";
  $db_user = "bc299bd08b7625";
  $db_pass = "b0f90a1e";
  $db_name = "heroku_cfd3a4efcdf1efd";
  
  $conn = new mysqli ( $db_host , $db_user , $db_pass , $db_name );
  if ( $conn -> connect_error ) {
    echo  "Fallo";
    morir ( "Error de conexión:" . $conn -> connect_error );
  }
?>

