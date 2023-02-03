<?php
    namespace PHP\Modelo;

    require_once('Conta.php');//Conectei as classes

    //Criando a conta
    $conta = new Conta("12345678910","Allan Sobral da Silva",1000000);//Instanciar a contas
    $conta->imprimir();//Utilizando o método imprimir

    echo "<br><br>";
    $saque = new Conta("12345678911","Gabriela",500000);
    $saque->imprimir();

    //Realizando Saque
    echo "<br><br>";
    $conta->sacar($conta,500000);
    $conta->imprimir();

    //Realizando Depósito
    echo "<br><br>";
    $conta->depositar($conta,100000);
    $conta->imprimir();

    //Realizar Transferência
    echo "<br><br>";
    $conta->transferir($saque,$conta,200000);
    $conta->imprimir();
    echo "<br><br>";
    $saque->imprimir();
?>