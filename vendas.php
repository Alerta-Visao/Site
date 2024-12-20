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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 

    <title>Vendas Realizadas</title> 

</head> 

<body> 

    <header id="headerAdmin"> 

        <a href="relatorio.php"> 

            <img id="logoCabecalho" src="./imagens/logoCabecalho.png" alt=""> 

        </a> 

        <input id="pesquisa" type="text"> 

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

    <center class="textoBranco" style="margin-top: 1%"> 

        <div style="margin-bottom: 2%;" id="secao1Titulo"> 

            <a href="relatorio.php"> 

                <img src="./imagens/botaoVoltar.png" alt=""> 

            </a> 

            <h2>Vendas Realizada</h2> 

        </div> 

        <div style="text-align: center;" class="container-fluid"> 

            <table class="table table-hover"> 

                <thead> 

                    <th>ID do pedido</th> 

                    <th>Nome Do titular</th> 

                    <th>Status</th> 

                </thead> 

                <tbody> 

                    <tr> 

                        <td>OLA</td> 

                        <td>OLA</td> 

                        <td>OLA</td> 

                    </tr> 

                </tbody> 

            </table> 

        </div> 

    </center> 

</body> 

</html> 

 

 