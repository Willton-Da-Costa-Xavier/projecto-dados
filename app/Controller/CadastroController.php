<?php 
    include "../config/configuracoes.php";
    include "../Model/Usuario.php";
    include "../config/banco.php";
    $u = new Usuario($conn);

    //verificamos se tem algo
    if(tem_dados()){
        //verificamos se tem algo na superglobal utilizando a funcao isset() e verificamos se nao foi passado ""
        if(isset($_POST["nome"]) && strlen($_POST["nome"])>0){
           $u->setNome($_POST["nome"]);
           $nome = $u->getNome();
        }else{
            //caso tenha um erro ele retorna o erro atraves da url
            header("Location: ../layout/formulario_cadastro.php?erronome=true");
        }

        if(isset($_POST["mail"]) && strlen($_POST["mail"])>0){
            $u->setMail($_POST["mail"]);
            $mail = $u->getMail();        
        }else{
            //caso tenha um erro ele retorna o erro atraves da url
            header("Location: ../layout/formulario_cadastro.php?erromail=true");
        }

        if(isset($_POST["pass"]) && strlen($_POST["pass"])>0){
            $u->setSenha($_POST["pass"]);
            $pass = $u->getSenha();
            $hasdpassword = password_hash($pass,PASSWORD_BCRYPT);        
        }else{
            //caso tenha um erro ele retorna o erro atraves da url
            header("Location: ../layout/formulario_cadastro.php?errosenha=true");
        }

        $stmnt = $conn->prepare("INSERT INTO usuario (nome,mail,senha) VALUES (?,?,?)");

        $stmnt->bind_param("sss",$nome,$mail,$hasdpassword);

        if($stmnt->execute()){
           header("Location: ../layout/formulario_cadastro.php?sucess=true"); 
        }else{
            //caso tenha um erro ele retorna o erro atraves da url
            header("Location: ../layout/formulario_cadastro.php?erro=true");
        }
    }


?>