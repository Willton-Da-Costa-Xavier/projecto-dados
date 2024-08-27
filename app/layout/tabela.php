<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>BI</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Morada</th>
            <th>E-mail</th>
            <th>Opcoes</th>
        </tr>

        <?php 
        
            //utilizamos 
            include "../config/configuracoes.php";
            include "../Model/Usuario.php";
            include "../config/banco.php";
            $usuario = new Usuario();

            //usamos a variavel $stmnt para fazer o select
            $stmnt = "SELECT * FROM usuario";

            //colocamos a execucao do query com $conn->query() dentro da variavel $result
            $result = $conn->query($stmnt);

            //verificamos se encontrou algo com o num_rows
            if($result->num_rows>0){
                //utilizamos um ciclo para percorer a base de dados e guardar na variavel $row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row["nome"]. "</td>";
                }
            }
            
        
        ?>
    </table>
</body>
</html>