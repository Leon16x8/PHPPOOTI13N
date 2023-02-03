<?php
    namespace PHP\Modelo;

    class Endereco{
        private string $logradouro;
        private string $numero;
        private string $complemento;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $UF;
        private string $pais;
        private string $CEP;

        //Método construtor
        public function __construct(
            string $logradouro, 
            string $numero, 
            string $complemento, 
            string $bairro,
            string $cidade,
            string $estado,
            string $UF,
            string $pais,
            string $CEP)
        {
            $this->logradouro  = $logradouro;
            $this->numero      = $numero;
            $this->complemento = $complemento;
            $this->bairro      = $bairro;
            $this->cidade      = $cidade;
            $this->estado      = $estado;
            $this->UF          = $UF;
            $this->pais        = $pais;
            $this->CEP         = $CEP;
        }//fim do construtor

        //Métodos gets e sets
        public function getLogradouro() : string
        {
            return $this->logradouro;
        }//fim do método

        public function setLogradouro(string $logradouro) : void
        {
            $this->logradouro = $logradouro;
        }//fim do método

        public function getNumero() : string
        {
            return $this->numero;
        }//fim do método

        public function setNumero(string $numero) : void
        {
            $this->numero = $numero;
        }//fim do método

        public function getComplemento() : string
        {
            return $this->complemento;
        }//fim do método

        public function setComplemento(string $complemento) : void
        {
            $this->complemento = $complemento;
        }//fim do método

        public function getBairro() : string
        {
            return $this->bairro;
        }//fim do método

        public function setBairro(string $bairro) : void
        {
            $this->bairro = $bairro;
        }//fim do método

        public function getCidade() : string
        {
            return $this->cidade;
        }//fim do método

        public function setCidade(string $cidade) : void
        {
            $this->cidade = $cidade;
        }//fim do método

        public function getEstado() : string
        {
            return $this->estado;
        }//fim do método

        public function setEstado(string $estado) : void
        {
            $this->estado = $estado;
        }//fim do método

        public function getUF() : string
        {
            return $this->UF;
        }//fim do método

        public function setUF(string $UF) : void
        {
            $this->UF = $UF;
        }//fim do método

        public function getPais() : string
        {
            return $this->pais;
        }//fim do método

        public function setPais(string $pais) : void
        {
            $this->pais = $pais;
        }//fim do método

        public function getCEP() : string
        {
            return $this->CEP;
        }//fim do método

        public function setCEP(string $CEP) : void
        {
            $this->CEP = $CEP;
        }//fim do método
    }//fim da classe endereço
?>