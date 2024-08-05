<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        
        function consultarIndividual(
            Conexao $conexao,
            string $nomeTabela,
            string $nomeCampo, 
            string $codigo)
        {
            try{
                $conn   = $conexao->conectar();
                $sql    = "select * from $nomeTabela where $nomeCampo = '$codigo'";
                $result = mysqli_query($conn,$sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $codigo){
                        echo "\nCPF: ".$dados["cpf"].
                             "\nNome: ".$dados["nome"].
                             "\nTelefone: ".$dados["telefone"].
                             "\nData de Nascimento".$dados["dtNascimento"].
                             "\nTotal de Compras: ".$dados["totalDeCompras"];
                        return;//Encerrando um processo
                    }
                    echo "CPF digitado não é válido!";
                }//fim do enquanto
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do método

        function consultarTudo(Conexao $conexao,
                            string $nomeTabela
        ){
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>CPF: ".$dados["cpf"].
                         "<br>Nome: ".$dados["nome"].
                         "<br>Telefone: ".$dados["telefone"].
                         "<br>Data de Nascimento: ".$dados["dtNascimento"].
                         "<br>Total de Compras: ".$dados["totalDeCompras"];
                }//fim do while
            }catch(Except $erro){
                echo $erro;
            }

        }//fim do método




    }//fim da classe
?>