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
<div class="container">
       
       <img src="../img/cadiadoChave.png" alt="cadiado e chave" class="chave">

       <div class="formulario">
           <form action="../../public/login.php" method="post" autocomplete="off">
               <fieldset>
                   <legend>Nome</legend>
                   <input type="text" name="nome" id="idnome">
               </fieldset>
               <fieldset>
                   <legend>Senha</legend>
                   <input type="password" name="pass" id="idpass">
               </fieldset>
               <input type="submit" value="Cadastrar" class="btn" id="open">
           </form>
       </div>

        <dialog id="pop-up">
            <h1>Registro Feito com sucesso</h1>
            <img src="" alt="">
            <button id="close">OK</button>
        </dialog>
    </div>

    <script src="../../public/js/script.js"></script>
</body>
</html>