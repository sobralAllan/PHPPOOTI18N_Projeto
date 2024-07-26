<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Pessoa.php');

    $pessoa1 = new Pessoa("12356862123","Allan","11999999999","Rua Jeri");
    $pessoa2 = new Pessoa("12345656458","João","11221313131","Rua Blá");
    
    
    echo $pessoa1->imprimir();
    echo $pessoa2->imprimir();
?>