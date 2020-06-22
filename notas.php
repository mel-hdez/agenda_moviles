<?php
  header('Content-Type: application/json');
  include 'confi_bd.php';

  $menu = $_REQUEST['opcion'];
  $resultadoArray = array();
    
    $notasQuery = "SELECT * FROM notas WHERE id_usuario = '$id'";
    $notasResult = mysqli_query($conn, $notasQuery);
    foreach($notasResult as $row){
      $resultadoArray[] = $row;
    }
    echo json_encode($resultadoArray);
?>