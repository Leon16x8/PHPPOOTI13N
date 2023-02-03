<?php
    namespace PHP\Modelo\Conta;

    require_once("Cliente.php");

    class Conta{
        //área de variáveis
        private float $saldoTitular;
        private Cliente $cliente;

        public function __construct(Cliente $cliente, float $saldo)
        {
            $this->cliente = $cliente;
            $this->setSaldo($saldo); 
        }//fim do construtor

        //Métodos de acesso e modificação
        public function getSaldo() : float
        {
            return $this->saldoTitular;
        }//fim do getSaldo

        public function setSaldo(float $saldo) : void
        {
            $this->saldoTitular = $saldo;
        }//fim do setSaldo

        public function sacar(Conta $cont, float $valor) : void
        {
            if($cont->getSaldo() >= $valor){
                $cont->setSaldo($cont->getSaldo()-$valor);
                return;//Parar a execução do método
            }
            echo "<br>Não é possível sacar $valor, pois a conta tem apenas ".$cont->getSaldo()."<br>";
        }//fim do sacar

        public function depositar(Conta $cont, float $valor) : void
        {
            if($valor > 0){
                $cont->setSaldo($cont->getSaldo()+$valor);
                echo "<br>Depósito realizado com sucesso!<br>";
                return;
            }
            echo "<br>Impossível depositar, algo deu errado!<br>";
        }//fim do depositar

        public function transferir(Conta $saque, Conta $transf, float $valor) : void 
        {
            if($valor > 0){
                $saque->sacar($saque,$valor);
                $transf->depositar($transf,$valor);
                echo "<br>Transferido com sucesso!<br>";
                return;
            }
            echo "<br>Impossível realizar a transferência!<br>";
        }//fim do tranferir
    }//fim da classe conta
?>