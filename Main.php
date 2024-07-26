<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Cliente.php');

    $pessoa1 = new Pessoa("12356862123","Allan","11999999999","Rua Jeri");
    $pessoa2 = new Pessoa("12345656458","João","11221313131","Rua Blá");
    
    $funcionario1 = new Funcionario(123,"Davi", 10000,"Gerente",
    "Senador Vergueiro", "1165656565");

    $cliente1 = new Cliente("1234","Claudio","12423", "Rua",'2024-02-01',125);

    echo $pessoa1->imprimir();
    echo $pessoa2->imprimir();
    echo $funcionario1->imprimir();
    echo $cliente1->imprimir();
?>