<?php
include 'confi_bd.php';

  $id = filter_input (INPUT_POST,"id");
  $resultadoArray = array();
    
    $notasQuery = "SELECT * FROM notas WHERE id_usuario = '$id'";
    $notasResult = mysqli_query($conn, $notasQuery);
    foreach($notasResult as $row){
      $resultadoArray[] = $row;
    }
    echo json_encode($resultadoArray);
?>