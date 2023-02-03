<?php
    namespace PHP\Modelo\Conta;//referência do projeto que estou usando

    require_once("Endereco.php");

    //Conectar o arquivo ao diretório
    use PHP\Modelo\Pessoa;//Endereço do arquivo que estou usando
    use PHP\Modelo\Endereco;

    class Cliente extends Pessoa{
        protected float $taxa;

        public function __construct(
            string $cpf, 
            string $nome, 
            string $telefone, 
            Endereco $endereco,
            float $taxa
            )
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);//Chame a classe Pessoa
            $this->taxa = $taxa;
        }//fim do construtor

        //Método get e Set
        public function getTaxa() : float
        {
            return $this->taxa;
        }//fim do taxa

        public function setTaxa(float $taxa) : void
        {
            $this->taxa = $taxa;
        }//fim do método

        public function __Tostring() : string
        {
            return "<br>Taxa: $this->taxa<br><br>";
        }//fim da string

        public function __get(string $atributo) : string
        {
            return $atributo;
        }

        public function __set(string $atributo, string $valor) : void
        {
            $this->$atributo = $valor;
        }

        public function calcular() : float
        {
            return $this->taxa * 0.88;
        }//fim do calcular
    }//fim da classe
?>