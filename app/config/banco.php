<?php 

    $conn = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

    if($conn->connect_error){
        die("Erro ao conectar ". $conn->connect_error);
    }

?>