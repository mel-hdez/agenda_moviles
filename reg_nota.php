<?php

include 'confi_bd.php';

    $notatitulo = filter_input (INPUT_POST,"nom_notas");
    $texnota = filter_input (INPUT_POST,"desc_notas");
    $fecha = filter_input (INPUT_POST,"fecha");
        
         $usuarioQuery = "INSERT INTO notas (nom_notas, desc_notas, fecha)
                              VALUES('$notatitulo','$texnota', '$fecha')";
            $userResult = mysqli_query($conn, $usuarioQuery);
            if($userResult){
              echo "1";
            }
?>


