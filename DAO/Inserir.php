<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    require_once('Endereco.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\Endereco;

    class Inserir{
        public Conexao $conexao;
        public string $tabela;
        public string $cpf;
        public string $nome;
        public string $telefone;
        public string $dtNascimento;
        public float $totalCompras;

     
        function cadastrarCliente(
            Conexao $conexao,
            string $cpf,
            string $nome,
            string $telefone,
            string $dtNascimento,
            float $totalCompras,
            int $codEndereco
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into cliente 
                (cpf, nome, telefone, dtNascimento, totalDeCompras, 
                codEndereco) 
                values ('$cpf','$nome','$telefone',
                '$dtNascimento','$totalCompras','$codEndereco')";
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

        function cadastrarEndereco(
            Conexao $conexao,
            int $codEndereco,
            string $logradouro,
            int $numero,
            string $bairro,
            string $cidade,
            string $estado,
            string $uf,
            string $pais,
            string $cep
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql = "insert into endereco (codigo, logradouro, 
                numero, bairro, cidade, estado, uf, pais, cep) values
                ('$codEndereco', '$logradouro', '$numero', '$bairro', '$cidade',
                '$estado', '$uf', '$pais', '$cep')";
                $result = mysqli_query($conn,$sql);

                //Fecha a conexao
                mysqli_close($conn);

                if($result){
                    "<br>Endereço inserido com sucesso!";
                }
                "<br>Impossível inserir";
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do método



    }//fim da classe
?>