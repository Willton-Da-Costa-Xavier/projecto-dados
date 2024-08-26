<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/style/menu.css">
    <title>Menu</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <!-- Colocamos um ?page=nome para aparecer na url -->
                <a href="?page=formulario">
                    <svg id="form"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <path d="M12 20h9" />
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                    </svg>
                </a>
            </li>
            <li>
                <!-- Colocamos um ?page=nome para aparecer na url -->
                <a href="?page=anexos">
                    <svg id="anexos" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M640-520v-200h80v200h-80ZM440-244q-35-10-57.5-39T360-350v-370h80v476Zm30 164q-104 0-177-73t-73-177v-370q0-75 52.5-127.5T400-880q75 0 127.5 52.5T580-700v300h-80v-300q-1-42-29.5-71T400-800q-42 0-71 29t-29 71v370q-1 71 49 120.5T470-160q25 0 47.5-6.5T560-186v89q-21 8-43.5 12.5T470-80Zm170-40v-120H520v-80h120v-120h80v120h120v80H720v120h-80Z"/></svg>        
                </a>
            </li>
            <li>
                <!-- Colocamos um ?page=nome para aparecer na url -->
                <a href="?page=lista">
                <svg id="lista" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m424-318 282-282-56-56-226 226-114-114-56 56 170 170ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm280-590q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/></svg>
                </a>
            </li>
        </ul>
    </nav>

    <div class="conteudo">
        <?php 
            
            //verificamos se tem o ?page na url quando clicar o link
            if(isset($_GET["page"])){
                $page = $_GET["page"];
                //trocamos o conteudo da variavel $page
                switch ($page) {
                    case 'formulario':
                        include("formulario.php");
                        break;
                        
                    case "anexos":
                        include("anexos.php");
                        break;

                    case "lista":
                        include("lista.php");
                        break;

                    default:
                        if(isset($_GET["user"])){
                            $nome = $_GET["user"];
                            echo "<h1>Bem Vindo </h1>". $nome;
                        }
                        
                }
            }else{
                echo "<h1>Bem Vindo </h1>";
            }
            
        ?>
    </div>
    <script src="../../public/js/script.js"></script>
</body>
</html>