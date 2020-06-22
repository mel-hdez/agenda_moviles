<?php
  include 'confi_bd.php';

  $id = filter_input (INPUT_POST,"id");
  $notatitulo = filter_input (INPUT_POST,"titulo");
  $texnota = filter_input (INPUT_POST,"texto");
    
  $usuarioQuery = "UPDATE notas SET nom_notas = '$notatitulo', desc_notas = '$texnota' WHERE id_notas = '$id'";
  $userResult = mysqli_query($conn, $usuarioQuery);
  if($userResult){
    $userQuery = "SELECT id_usuario FROM notas WHERE id_notas = '$id'";
    $resultado = $conn->query($userQuery);    
    $array = $resultado->fetch_array(MYSQLI_NUM);
    echo '1-'.$array[0];
  }
?>