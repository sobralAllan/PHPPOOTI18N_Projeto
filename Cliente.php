<?php
    namespace PHP\Modelo;

    class Cliente{
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private DateTime $dataNascimento;
        private float $totalDeCompras;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    string $endereco,
                                    DateTime $dataNascimento,
                                    float $totalDeCompras)
        {
            $this->cpf            = $cpf;
            $this->nome           = $nome;
            $this->telefone       = $telefone;
            $this->endereco       = $endereco;
            $this->dataNascimento = $dataNascimento;
            $this->totalDeCompras = $totalDeCompras; 
        }//fim do construtor

        

        public function __get(string $nomeDaVariavelQueVoceDeclarouNoConstrutor){
            return $this->nomeDaVariavelQueVoceDeclarouNoConstrutor;
        }//fim do getTexto

        public function __set(string $nomeVariavel,string $valor):void
        {
            $this->nomeVariavel = $valor;
        }//fim do setTexto

        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->$nome.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Endereço: ".$this->endereco.
                   "<br>Data de Nascimento: ".$this->dataNascimento.
                   "<br>Total de Compras: ".$this->totalCompras;
        }//fim do imprimir

      



    }//fim da classe
?>