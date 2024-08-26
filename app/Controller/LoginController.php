<?php 

    include "../config/configuracoes.php";
    include "../Model/Usuario.php";
    include "../config/banco.php";
    $usuario = new Usuario();

    //verificamos se tem algo
    if(tem_dados()){
        //verificamos se tem algo na superglobal utilizando a funcao isset() e verificamos se nao foi passado ""
        if(isset($_POST["nome"]) && strlen($_POST["nome"])>0){
            $usuario->setNome($_POST["nome"]);
            $nome = $usuario->getNome();
        }else{
            //caso tenha um erro ele retorna o erro atraves da url
            header("Location: ../../public/login.php?erronome=true");
            exit();
        }

        if(isset($_POST["pass"]) && strlen($_POST["pass"])>0){
            $usuario->setSenha($_POST["pass"]);
            $pass = $usuario->getSenha();  
        }else{
            //caso tenha um erro ele retorna o erro atraves da url
            header("Location: ../../public/login.php?errosenha=true&nome=".$_POST["nome"]);
            exit();
        }

        //Vamos buscar o password no banco
        $stmnt = $conn->prepare("SELECT senha FROM usuario WHERE nome = ?");
        $stmnt->bind_param("s",$nome);
        //executamos o statement
        $stmnt->execute();
        //buscamos o resultado com a funcao get_result()
        $result = $stmnt->get_result();

        //verificamos o numero de linhas se for maior que 0 com o num_rows
        if($result->num_rows>0){
            //pegar o hash armazenado e pegar o resultado usando o fetch_assoc()
            $row = $result->fetch_assoc();
            //guardamos o password dentro do array com o nome do campo da base de dados
            $hashArmazenado = $row["senha"];

            //verificamos a senha digitada e comparamos com a senha buscada
            if(password_verify($pass,$hashArmazenado)){
                header("Location: ../view/menu.php?user=".$nome);
                exit();
            }else{
                header("Location: ../../public/login.php?errosenha=true"); 
                exit();
            }

        }else{
            header("Location: ../../public/login.php?erronome=true");
            exit();
        }

        

    }



?>