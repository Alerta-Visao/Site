<?php
    namespace PHP;

    require('DAO/conexao.php');

    use PHP\DAO\Conexao;

    $conexao = new Conexao();

    $conexao->conectar();
?>