<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="./script.js"></script>
    <title>Formulário de Chamado</title>
</head>
<body>
    <header>
        <a href="index.php">
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
            <a style="text-decoration: none; font-weight: bold;" 
            class="menu" href="suporte.php">
                Suporte
            </a>
            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <img src="imagens/botaoAcessarUsuario.png" alt="">
            </a>
                <!-- MenuUsuario -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <a id="botaoLogin" href="loginCliente.php" class="offcanvas-title" id="offcanvasRightLabel">Fazer Login</a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                </div>
                <!-- ------------------------------- -->
    </header>
    <center>
        <div style="display: flex;
                    justify-content: center;">
            <a style="margin-left: 2%;
                    margin-top: 2%;" 
            href="suporte.php">
                <img src="./imagens/botaoVoltar.png" alt="">
            </a>
            <div id="cartao">
                <h2 style="margin: 0; margin-bottom: 10%;">Formulário de chamado</h2>
                <div id="nomeCompleto">
                    <input style="background-color: #cccccc; border: 1px solid black" id="loginNome" class="inputLogin" type="text" placeholder="Nome">
                    <input style="background-color: #cccccc; border: 1px solid black" id="loginSobrenome" class="inputLogin" type="text" placeholder="Sobrenome">
                </div>
                <input class="inputCartao" type="text" placeholder="Telefone">
                <input class="inputCartao" type="text" placeholder="Email">
                <select style="color: #666565;
                                padding-left: 1%;
                                width: 100%;" 
                        class="inputCartao" id="">
                    <option disabled selected value="">Selecionar Categoria</option>
                    <option value="">Problemas com o pagamento</option>
                    <option value="">Problemas com a entrega</option>
                    <option value="">Devoluções e troca</option>
                    <option value="">Problemas na conta e acesso</option>
                    <option value="">Outros</option>
                </select><br>
                <input class="inputCartao" style="margin-bottom: 15%;" type="text" placeholder="Descreva o seu problema"><br>
                <a id="botaoEntrar" href="pagamentoRealizado.php">Finalizar pedido</a>
            </div>
        </div>
    </center>
</body>
</html>