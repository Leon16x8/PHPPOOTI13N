<?php
    namespace PHP\Modelo;

    require_once("Endereco.php");

    class Funcionario extends Pessoa{
        protected string $matricula;
        protected float  $salario;
        protected string $cargo;

        public function __construct(
            string $cpf,
            string $nome,
            string $telefone,
            Endereco $endereco,
            string $matricula,
            float $salario,
            string $cargo
        )
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->matricula = $matricula;
            $this->salario   = $salario;
            $this->cargo     = $cargo;
        }//fim do construtor

        public function __get(string $nomeDaVariavelQueVoceDeclarouLaNoConstrutor){
            return $this->$nomeDaVariavelQueVoceDeclarouLaNoConstrutor;
        }//fim do get

        public function __set(string $nomeVariavel, string $valor) : void
        {
            $this->nomeVariavel = $valor;
        }//fim do set

        public function __toString() : string
        {
            return "<br>Matrícula: ".$this->matricula."<br>Cargo: ".$this->cargo."<br>Salário: ".$this->salario;
        }//fim do toString

        public function calcular() : float
        {
            return $this->salario * 0.07;
        }//fim do método
    }//fim do Funcionario
?>