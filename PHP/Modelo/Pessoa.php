<?php
    namespace PHP\Modelo;
    
    require_once("Endereco.php");

    abstract class Pessoa{
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;
        //Inserir a variável que representa Endereço

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco){
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco; 
        }//fim do construtor

        public function __get(string $nomeDaVariavelQueVoceDeclarouLaNoConstrutor){
            return $this->$nomeDaVariavelQueVoceDeclarouLaNoConstrutor;
        }//fim do get

        abstract public function calcular() : float;
    }//fim da classe Pessoa
?>