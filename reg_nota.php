<?php

include 'confi_bd.php';

    $id = filter_input (INPUT_POST,"id");
    $notatitulo = filter_input (INPUT_POST,"titulo");
    $texnota = filter_input (INPUT_POST,"desc_notas");
    $fecha = filter_input (INPUT_POST,"fecha");
        
         $usuarioQuery = "INSERT INTO notas (nom_notas, desc_notas, fecha, id_usuario)
                              VALUES('$notatitulo','$texnota', '$fecha', '$id')";
            $userResult = mysqli_query($conn, $usuarioQuery);
            if($userResult){
              echo "1";
            }
?>


