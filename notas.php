<?php
include 'confi_bd.php';

$id = filter_input (INPUT_POST,"id");
    
     $usuarioQuery = "SELECT * FROM notas WHERE id_notas (nom_notas, desc_notas, fecha, id_usuario)
                          VALUES('$notatitulo','$texnota', '$fecha', '$id')";
        $userResult = mysqli_query($conn, $usuarioQuery);
        if($userResult){
          echo "1";
        }
?>