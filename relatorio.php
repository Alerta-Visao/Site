<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="./script.js"></script>
    <title>Relatório</title>
</head>
<body>
    <header id="headerAdmin">
        <a href="index.php">
            <img id="logoCabecalho" src="./imagens/logoCabecalho.png" alt="">
        </a>
        <input id="pesquisa" type="text">
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
    <center class="textoBranco" style="margin-top: 1%">
        <h2>Relatórios</h2>
        <div id="secaoRelatorio">
            <div id="secaoRelatorio1">
                <!-- <div>
                    <h6>Faixa etária de usuários</h6>
                    <a href="faixaEtaria.php">
                        <img src="imagens/faixaEtariaGrafico.png" alt="">
                    </a>
                </div> -->
                <div>
                    <h6>Chamados abertos</h6>
                    <a href="chamadosAbertos.php">
                        <img src="imagens/graficoChamado.png" alt="">
                    </a>
                </div>
            </div>
            <div id="secaoRelatorio2">
                <div>
                    <h6>Vendas realizadas</h6>
                    <a href="vendas.php">
                        <img src="imagens/graficoVendas.png" alt="">
                    </a>
                </div>
                <div>
                    <h6>Fornecedores</h6>
                    <a href="fornecedores.php">
                        <img src="imagens/fornecedores.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
