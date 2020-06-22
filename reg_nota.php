<?php

include 'confi_bd.php';

    $titulonota = filter_input (INPUT_POST,"titulo");
    $textonota = filter_input (INPUT_POST,"notatex");
    
        
         $usuarioQuery = "INSERT INTO notas (titulo, notatext)
                              VALUES('$titulonota','$textnota')";
            $userResult = mysqli_query($conn, $usuarioQuery);
            if($userResult){
              echo "1";
            }
?>