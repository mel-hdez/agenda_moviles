<?php
  include 'confi_bd.php';
  
  $nombre = filter_input(INPUT_POST, "nombre");
  $contra = filter_input(INPUT_POST, "contraseña");
  $contra = md5($contra);
  
  $query = "SELECT * FROM usuario WHERE nombre = '".$nombre."' AND contrasena = '".$contra."'";
  $resultado = $conn->query($query);    
  $array = $resultado->fetch_array(MYSQLI_NUM);
  $row = $resultado->num_rows;
  if($row > 0){
    echo '1-'.$array[0];
  }
  mysqli_close($conn);
?>