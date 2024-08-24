<?php 
    //utilizando as constantes definida para passar os dados da base de dados 
    $conn = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

    //verificar a conexao 
    if($conn->connect_error){
        die("Erro ao conectar ". $conn->connect_error);
    }

?>