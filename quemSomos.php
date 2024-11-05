<?php
    namespace Site;
    session_start();

    function deslogar(){
        $_SESSION['nome'] = "";
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
    <script src="./script.js"></script>
    <title>Quem Somos</title>
</head>
<body>
    <header>
        <a href="index.php">
            <img id="logoCabecalho" src="./imagens/logoCabecalho.png" alt="">
        </a>
        <input id="pesquisa" type="text">
            <a style="text-decoration: none; font-weight: bold;" 
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
                <?php
                    if(isset($_SESSION['nome']) && $_SESSION['nome'] != ""){
                        echo '<div style="border-radius: 10px; height: 20%; width: 20%" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">';
                        echo '<div style="display: flex; align-items: center;border-bottom:0.5px solid black;" class="offcanvas-header">';
                        echo '<img src="./imagens/iconeUsuario.png"/>';
                        echo '<div style="display: flex; flex-direction: column; margin-left: 8%">';
                        echo '<h5>Bem vindo ', $_SESSION['nome'], '</h5>';
                        echo $_SESSION['email'];
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="offcanvas-body">';
                        // variavel sair recebe 1 para executar a função do php
                        echo '<a style="text-decoration: none; color: black" href="index.php?sair=1">Sair</a>';
                        echo '</div>';
                        echo '</div>';
                        if(isset($_GET['sair']) == 1){
                            deslogar();
                        }
                    }
                    else{
                        echo '<div style="border-radius: 10px; height: 10%; width: 15%"" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">';
                        echo '<div class="offcanvas-header">';
                        echo '<a id="botaoLogin" href="loginCliente.php" class="offcanvas-title" id="offcanvasRightLabel">Fazer Login</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
                <!-- ------------------------------- -->
    </header>
    <center style="margin-top: 1%;">
        <h2 class="textoBranco">Quem somos nós?</h2>
        <div id="secao1">
            <div id="secao1Historia">
                <h3 style="text-align: justify;" class="textoBranco">História</h3>
                <p style="font-size: 110%;
                          text-align: justify;" 
                    class="textoBranco">
                   Fundada em fevereiro de 2024, a Alerta Visão visa auxiliar pessoas com deficiência visual. A ideia surgiu de alunos do Senac São Bernardo que criaram um boné moderno com sensores ultrassônicos em 360 graus. Esse produto inovador ajuda os usuários a detectar obstáculos acima da altura do corpo, oferecendo mais liberdade e segurança em suas atividades cotidianas.
            </div>
            <div style="font-size: 110%;
            text-align: justify;"  id="secao1MissaoVisaoValores">
                <h3 class="textoBranco">Missão</h3>
                <p class="textoBranco">
                 Apoiar pessoas com deficiência visual com soluções inovadoras que garantam liberdade, bem-estar e integração social. Usamos tecnologia acessível para transformar vidas.
                </p>
                <h3 class="textoBranco">Visão</h3>
                <p class="textoBranco">
                    Valorizamos a diversidade com produtos inclusivos. Inovamos para melhorar a vida das pessoas com deficiência visual, promovendo liberdade e proteção. Contribuímos para a sociedade com iniciativas de inclusão e acessibilidade, garantindo sempre a qualidade e eficácia em nossos produtos.
                </p>
            </div>
        </div>
    </center>
</body>
</html>