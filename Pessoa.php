<?php
    namespace PHP\Modelo;

    class Pessoa{
        //Declarando as variáveis
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;

        //Método construtor
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construtor

        //Métodos de acesso e modificação
        public function getCPF():string
        {
            return $this->cpf;
        }//fim do getCPF

        public function getNome():string
        {
            return $this->nome;
        }//fim do método getNome

        public function getTelefone():string
        {
            return $this->telefone;
        }//fim do método getTelefone

        public function getEndereco():string
        {
            return $this->endereco;
        }//fim do método getEndereco

        public function setCPF(string $cpf):void
        {
            $this->cpf = $cpf;
        }//fim do método setCPF

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//fim do método setNome

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//fim do método setTelefone

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//fim do método setEndereco

        public function imprimir():string
        {
            return "<br>CPF: ".$this->getCPF().
                   "<br>Nome: ".$this->getNome().
                   "<br>Telefone: ".$this->getTelefone().
                   "<br>Endereço: ".$this->getEndereco();
        }//fim do método imprimir







    }//fim da classe










?>