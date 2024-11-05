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
                $sql  = "Insert into Acompanhante 
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
            int $codAcompanhante
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into Assistida 
                (nome, sobrenome, telefone, email, codAcompanhante) 
                values ('$nome','$sobrenome','$telefone',
                '$email', $codAcompanhante)";
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