<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Cliente.php');
    require_once('Endereco.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    use PHP\Modelo\DAO\Conexao;//Direcionar o arquivo
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;

    $conexao = new Conexao();
    $inserir = new Inserir();
    $consultar = new Consultar();
    $atualizar = new Atualizar();
    $excluir = new Excluir();
    /*echo $inserir->cadastrarEndereco($conexao,
                                 1,
                                'Rua jiparana',
                                 123,
                                'Berinni',
                                'São Paulo',
                                'São Paulo',
                                'SP',
                                'Brasil',
                                '03586921');*/

    /*echo $inserir->cadastrarCliente($conexao,
                                '12345678910', 
                                'Davi',
                                '11981230912',
                                '17/04/1989',
                                1000,
                                1);*/
    /*$consultar->consultarIndividual($conexao,
                                    'cliente',
                                    'cpf',
                                    '12345678910');
    
  

    $atualizar->atualizarCliente($conexao, 
                                "nome",
                                "Claudia",
                                "12345678910");
    */

    $excluir->excluirCliente($conexao,"12345678910");

    $consultar->consultarTudo($conexao,
                             'cliente');

/*
    $enderecoCliente1 = new Endereco('Rua jiparana',
                                     123,
                                    'Berinni',
                                    'São Paulo',
                                    'São Paulo',
                                    'SP',
                                    'Brasil',
                                    '03586921');

    $cliente1 = new Cliente('12345678910', 
                           'Davi',
                           '11981230912',
                            $enderecoCliente1,
                            '17/04/1989',
                            1000);

    echo $cliente1->imprimir();
    echo $enderecoCliente1->imprimir();

    echo "<br><br>";

    $enderecoFunc1 = new Endereco("Rua Jeri",
                   123,
                   "Realengo",
                   "Rio de Janeiro",
                   "Rio de Janeiro",
                   "RJ",
                   "Brasil",
                   "01312312");

    $funcionario1 = new Funcionario("12136598565",
                                    123,
                                    "Astolfo",
                                    1256,
                                    "Gerente",
                                    $enderecoFunc1,
                                    "1190909090");
    
    echo $funcionario1->imprimir();
    echo $enderecoFunc1->imprimir();
*/

?>

