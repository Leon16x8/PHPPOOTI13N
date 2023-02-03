<?php
    namespace PHP\Modelo\DAO;

    require_once("Conexao.php");

    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        public function consultarIndividual(Conexao $conexao, string $nomeDaTabela, int $codigo){
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_array($result)){
                    if($dados['codigo'] == $codigo){
                        echo "<br><br>Codigo: " . $dados["codigo"] . "<br>Nome: " . $dados["nome"] . "<br>Telefone: " . $dados["telefone"];
                        return;
                    }
                }
                echo "Código digitado não foi encontrado!";
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim da função Consultar Individual

        public function consultarTudo(Conexao $conexao, string $nomeDaTabela){
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_array($result)){
                        echo "<br><br>Codigo: " . $dados["codigo"] . "<br>Nome: " . $dados["nome"] . "<br>Telefone: " . $dados["telefone"];
                }
            }catch(Except $erro){
                echo $erro;
            }
        }
    }//fim da class consultar
?>