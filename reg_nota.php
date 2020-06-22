<?php

include 'confi_bd.php';

    $notatitulo = filter_input (INPUT_POST,"titulo");
    $texnota = filter_input (INPUT_POST,"texto");
    $fecha = filter_input (INPUT_POST,"fecha");
        
         $usuarioQuery = "INSERT INTO nota (titulo, texto, fecha)
                              VALUES('$notatitulo','$texnota', '$fecha')";
            $userResult = mysqli_query($conn, $usuarioQuery);
            if($userResult){
              echo "1";
            }
?>


