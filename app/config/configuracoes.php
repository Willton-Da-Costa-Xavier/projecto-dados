<?php 

    //usamos a funcao define("nome_da_constante","valor") para definir constantes
    define("BD_SERVIDOR","127.0.0.1");
    define("BD_USUARIO","sistemadedados");
    define('BD_SENHA', 'sistema');
    define("BD_BANCO","sd");
    
    //fincao que verifica se foram mandado dados
    function tem_dados(){
        //utilizamos a funcao count() para ver o numero de dados mandados
        if (count($_POST)>0){
            return true;
        }else{
            return false;
        }
    }

?>