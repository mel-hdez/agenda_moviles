<?php
  include 'dbconfig.php';
  
  $correo = filter_input(INPUT_POST, "nombre");
  $contra = filter_input(INPUT_POST, "contraseña");
  $contra = md5($contra);
  
  $query = "SELECT * FROM usuario WHERE Nombre = '".$correo."' AND Contrasena = '".$contra."'";
  $resultado = $conn->query($query);
  $array = $resultado->fetch_array(MYSQLI_NUM);
  $row = $resultado->num_rows;
  if($row > 0){
    echo '1-'.$array[0];
  }
  mysqli_close($conn);
?>