<?php

include 'confi_bd.php';

    $tipo = filter_input (INPUT_POST,"nombre");
    $email = filter_input (INPUT_POST,"email");
    $contras = filter_inputT (INPUT_POST,"contrasena");

        $revisarQuery = "SELECT * FROM usuario WHERE Correo = '$correo'";
        $revisarResultado = mysqli_query($conn, $revisarQuery);
            $usuarioQuery = "INSERT INTO usuario(nombre, email, contrasena)
                              VALUES('$nombre','$email', '$contras')";
            $userResult = mysqli_query($conn, $usuarioQuery);
            if($userResult){
              echo "1";
            
?>

