<?php
    namespace Site\PHP\DAO;

    require_once('Conexao.php');

    use Site\PHP\DAO\Conexao;

    class Inserir{
        function cadastrarAcompanhante(
            Conexao $conexao,
            string $nome,
            string $sobrenome,
            string $telefone,
            string $email,
            string $login,
            string $senha
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into acompanhante 
                (nome, sobrenome, telefone, email, login, 
                senha) 
                values ('$nome','$sobrenome','$telefone',
                '$email','$login','$senha')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método

        function cadastrarAssistida(
            Conexao $conexao,
            string $nome,
            string $sobrenome,
            string $telefone,
            string $email,
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into assistida 
                (nome, sobrenome, telefone, email) 
                values ('$nome','$sobrenome','$telefone',
                '$email')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método
    }//fim da classe
?>