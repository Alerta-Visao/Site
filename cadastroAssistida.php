<?php
    namespace Site;

    require_once('PHP/DAO/Conexao.php');
    require_once('PHP/DAO/Inserir.php');
    require_once('PHP/DAO/Consultar.php');
    use Site\PHP\DAO\Conexao;
    use Site\PHP\DAO\Inserir;
    use Site\PHP\DAO\Consultar;

    $conexao = new Conexao();
    $inserir = new Inserir();
    $consultar = new Consultar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css ">
    <title>Cadastro Pessoa Assistida</title>
</head>
<body>
    <center>
        <div id="areaLogin">
            <img src="./imagens/logoSemFundo.png" alt=""><br>
            <p style="font-weight: bold;" class="textoBrancoLogin">Cadastro Pessoa Assistida</p><br>
            <form method="POST">
                <div id="nomeCompleto">
                    <input name="inputNome" id="loginNome" class="inputLogin" type="text" placeholder="Nome">
                    <input name="inputSobrenome" id="loginSobrenome" class="inputLogin" type="text" placeholder="Sobrenome">
                </div><br>
                <!-- <input style="font-size: 150%;" class="inputLogin inputCadastro" type="date"><br><br> -->
                <input name="inputEmail" class="inputLogin inputCadastro" type="text" placeholder="Email"><br><br>
                <input name="inputTelefone" class="inputLogin inputCadastro" type="number" placeholder="Telefone"><br><br>
                <?php
                    echo '<button id="botaoEntrar" href="">Cadastrar</button><br><br>';
                    
                    //Declarando as variváveis
                    $nome = "";
                    $sobrenome = "";
                    $email = "";
                    $telefone = "";

                    //Impedindo que ao acessar a página, seja pega os campos vazios
                    if (isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) &&
                        isset($_POST['inputEmail']) && isset($_POST['inputTelefone']))
                    {
                        $nome = $_POST['inputNome'];
                        $sobrenome = $_POST['inputSobrenome'];
                        $email = $_POST['inputEmail'];
                        $telefone = $_POST['inputTelefone'];
                        
                        $inserir->cadastrarAssistida($conexao, $nome, $sobrenome, $email,
                                                        $telefone);
                        header("Location: index.html");
                    }    
                ?>
                <a id="botaoCadastrar" href="cadastro.php">Voltar</a><br>
            </form>
        </div>
    </center>
</body>
</html>