<?php
namespace PHP\Modelo\DAO;

require_once("Conexao.php");

use PHP\Modelo\DAO\Conexao;

class Excluir{
    public function excluir(Conexao $conexao, string $nomeDaTabela, int $codigo){
        try{
            $conn = $conexao->Conectar();
            $sql = "delete from $nomeDaTabela where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);

            if($result){
                echo "<br><br>|------------Deletado com Sucesso------------|";
                return;
            }
            echo "<br><br>|------------Impossivel Deletar------------|";

        }catch(Except $erro){
            echo $erro;
        }
    }
}

?>