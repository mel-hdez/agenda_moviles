<?php
  include 'confi_bd.php';

  $id = filter_input (INPUT_POST,"id");
  $notatitulo = filter_input (INPUT_POST,"titulo");
  $texnota = filter_input (INPUT_POST,"texto");
    
  $usuarioQuery = "UPDATE notas SET nom_notas = '$notatitulo', desc_notas = '$texnota' WHERE id_notas = '$id'";
  $userResult = mysqli_query($conn, $usuarioQuery);
  if($userResult){
    echo "1";
  }
?>