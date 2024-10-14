<?php
    namespace PHP\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        public Conexao $conexao;
        public string $tabela;
        public string $cpf;
        public string $nome;
        public string $telefone;
        public string $dtNascimento;
        public float $totalCompras;

    
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
    }//fim da classe
?>