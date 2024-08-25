<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/style/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <div class="container" id="cadcontainer">
       
       <img src="../img/cadiadoChave.png" alt="cadiado e chave" class="chave" id="imgcad">

       <div class="formulario" >
           <form action="../Controller/CadastroController.php" method="post" autocomplete="on">
               <fieldset id="usuario">
                   <legend>Usuario</legend>
                   <input type="text" name="nome" id="idnome">
               </fieldset>

               <fieldset id="mail">
                <legend>E-Mail</legend>
                <input type="email" name="mail" id="idmail">
               </fieldset>

               <fieldset id="senha">
                   <legend>Senha</legend>
                   <input type="password" name="pass" id="idpass">
               </fieldset>
               <input type="submit" value="Cadastrar" class="btn" id="open">
           </form>
       </div>

        
    </div>

       
    

    
</body>
</html>        