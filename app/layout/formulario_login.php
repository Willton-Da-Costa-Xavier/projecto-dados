<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="../app/img/favicon.ico" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <div class="container">
       
        <img src="../app/img/cadiadoChave.png" alt="cadiado e chave" class="chave">

        <div class="formulario">
            <form action="../Controller/LoginController.php" method="post" autocomplete="off">
                <fieldset  id="usuario">
                    <legend>Username</legend>
                    <input type="text" name="nome" id="idnome">
                </fieldset>
                <fieldset id="senha">
                    <legend>Senha</legend>
                    <input type="password" name="pass" id="idpass">
                </fieldset>
                <a href="../app/View/cadastro.php">Caso nao tenha conta registra-se</a>
                <input type="submit" value="Logar" class="btn">
            </form>
        </div>
    </div>

    <dialog id="pop-up">
        <h1>Registro Feito com sucesso</h1>

        <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#75FB4C"><path d="M422-297.33 704.67-580l-49.34-48.67L422-395.33l-118-118-48.67 48.66L422-297.33ZM480-80q-82.33 0-155.33-31.5-73-31.5-127.34-85.83Q143-251.67 111.5-324.67T80-480q0-83 31.5-156t85.83-127q54.34-54 127.34-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82.33-31.5 155.33-31.5 73-85.5 127.34Q709-143 636-111.5T480-80Zm0-66.67q139.33 0 236.33-97.33t97-236q0-139.33-97-236.33t-236.33-97q-138.67 0-236 97-97.33 97-97.33 236.33 0 138.67 97.33 236 97.33 97.33 236 97.33ZM480-480Z"/>
        </svg>

        <button id="close">OK</button>
    </dialog>
</body>
</html>