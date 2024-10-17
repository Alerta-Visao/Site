<?php
    namespace Site;
    session_start();

    function deslogar(){
        $_SESSION['usuario'] = "";
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>Página Incial</title>
</head>
<body>
    <header>
        <a>
            <img id="logoCabecalho" src="./imagens/logoCabecalho.png" alt="">
        </a>
        <input id="pesquisa" type="text">
            <a style="text-decoration: none;" 
                class="menu" href="quemSomos.php">
                Quem Somos
            </a>
            <a style="text-decoration: none;" 
                class="menu" href="compra.php">
                Comprar
            </a>
            <a style="text-decoration: none;" 
            class="menu" href="suporte.php">
                Suporte
            </a>
            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <img src="imagens/botaoAcessarUsuario.png" alt="">
            </a>
            <!-- MenuUsuario -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <div style="display: flex; flex-direction: column" >
                    <?php
                        if($_SESSION['usuario'] != ""){
                            echo 'Bem vindo ', $_SESSION['usuario'];
                            // variavel sair recebe 1 para executar a função do php
                            echo '<a href="index.php?sair=1">Sair</a>';
                            if(isset($_GET['sair']) == 1){
                                deslogar();
                            }
                        }
                        else{
                            echo '<a id="botaoLogin" href="loginCliente.php" class="offcanvas-title" id="offcanvasRightLabel">Fazer Login</a>';
                        }
                    ?>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
            <!-- ------------------------------- -->
    </header>
    <center>
        <div id="secao1">
            <div id="secao1BoasVindas">
                <h2 style="margin-bottom: 10%;" class="textoBranco">Boas Vindas!</h2>
                <img style="margin-bottom: 10%;" src="./imagens/chapeuModelo.png" alt=""><br>
                <a id="botaoEntrar" href="compra.php">
                    Ver detalhes
                </a>
            </div>
            <div id="secao1QuemSomos">
                <h2 style="text-align: start" class="textoBranco">Quem somos nós?</h2>
                <p style="font-size: 130%; text-align: start;" class="textoBranco">
                    Lorem ipsum dolor sit amet, consectetur<br> adipiscing 
                    elit. Sed do eiusmod tempor<br> incididunt ut labore 
                    et dolore magna<br> aliqua. Ut enim ad minim veniam, 
                    quis<br> nostrud exercitation ullamco laboris nisi ut<br> 
                    aliquip ex ea commodo consequat. Duis<br> aute irure 
                    dolor in reprehenderit in<br> voluptate velit esse 
                    cillum dolore eu fugiat<br> nulla pariatur. Excepteur
                    sint occaecat<br> cupidatat non proident, sunt in
                    culpa qui<br> officia deserunt mollit anim id est<br>
                    laborum...</p>
                <a href="quemSomos.php" id="botaoCadastrar">Ver mais</a>
            </div>
        </div>
    </center>
</body>
</html>