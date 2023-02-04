<?php
    namespace PHP\Modelo;
    

    require_once('Pessoa.php');
    require_once('Conta/Cliente.php');
    require_once("Funcionario.php");
    require_once("Conta/Conta.php");
    require_once("Endereco.php");
    require_once("DAO/Conexao.php");
    require_once("DAO/Inserir.php");
    require_once("DAO/Consultar.php");
    require_once("DAO/Atualizar.php");
    require_once("DAO/Excluir.php");

    use PHP\Modelo\Conta\Cliente;
    use PHP\Modelo\Conta\Conta;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;
    use PHP\Modelo\Pessoa;

    /*
    $enderecAllan = new Endereco(
        "Avenida Senador Vergueiro",
        "400",
        "Senacão",
        "Centro",
        "São Bernardo do Campo",
        "São Paulo",
        "SP",
        "Brasil",
        "02345000"
    );

    $clientAllan = new Cliente("12345678910","Allanzinho","11988128798",$enderecAllan,20);

    $contaAllan = new Conta($clientAllan,200);

    echo $contaAllan->getSaldo();
    echo $contaAllan->depositar($contaAllan,400);
    echo $contaAllan->getSaldo();

    echo "<br><br>Taxa da Conta R$ ".$clientAllan->getTaxa();
    echo $clientAllan->setTaxa(100);
    echo "<br><br>Taxa da Conta R$ ".$clientAllan->getTaxa();

    echo $clientAllan;//Imprimi os dados, utilizando o TOSTRING
    echo $clientAllan->taxa;
    echo $clientAllan->taxa = 200;

    $func = new Funcionario('112','Allanzinho','11',$enderecAllan,'1','15000','Professor');
    echo $func;

    echo "<br><br><br>";
    echo $func->salario;//USO DO GET, BASTA COLOCAR O NOME DA VARIÁVEL NA FRENTE DA SETA... (->)

    echo "<br><br><br>";
    $func->salario = 16000;
    echo "<br>Novo Salário: ".$func->cpf;
    echo "<br>".$func->calcular();
    echo "<br>".$clientAllan->calcular();

    
    echo "<br><br><br>";
    $person = new Pessoa('123','Gabriela','11111',$enderecAllan);
    echo $person->nome;
    */

echo "|----------- Teste de Banco de Dados -----------|<br><br>";
$conexao = new Conexao();//Permissão para acessar os método da classe Conexao
$conexao->Conectar();//Abrindo conexao com o banco de dados

echo "<br><br>|----------- INSERIR -----------|<br><br>";
$insert = new Inserir();//Permissão para acessar os método da classe Inserir
echo $insert->Cadastrar($conexao, 'pessoa', 'Leonardo', '11945692198');

echo "<br><br>|----------- Consultar -----------|<br><br>";
$consultar = new Consultar();//Permissão para acessar os método da classe Consultar
echo $consultar->consultarIndividual($conexao, 'pessoa', 2);

echo "<br><br>|----------- Consultar Tudo -----------|<br><br>";
echo $consultar->consultarTudo($conexao, 'pessoa');

echo "<br><br>|----------- Atualizar Dado -----------|<br><br>";
$atualizar = new Atualizar();
$atualizar->atualizar($conexao, 'nome', 'DJ Azeitona', '1', 'pessoa');

echo "<br><br>|----------- Excluir Dado -----------|<br><br>";
$deletar = new Excluir();
$deletar->excluir($conexao, 'pessoa', 25);











    



?>