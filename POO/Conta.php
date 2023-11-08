<?php

class Conta
{
    private $nome;
    private $numConta;
    private $Saldo;

    function __construct(){
        $this->nome = "pericles";
        $this->numConta = "123-4";
        $this->Saldo = 1000;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    function getnumConta()
    {
        return $this->numConta;
    }

    function setSaldo($Saldo){
        $this->Saldo = $Saldo;
    }
    function getSaldo(){
        return $this->Saldo;
    }
    function imprimirSaldo(){
        echo"saldo disponivel R$" . $this->getSaldo();
    }

    function imprimirDados(){
        echo"<h1> Dados da Conta </h1>";
        echo"Nome".$this->nome;
        echo "Numero Conta:".$this->numConta;
        $this->imprimirSaldo();
    }

    function debitar($valor){
        if($valor <= $this->Saldo){
        $this->Saldo -= $valor;
        echo"O valor R$" .$valor. "foi sacado com sucesso!";
    } else {
        echo"Saldo Insuficiente";
    }
}

function depositar($valor){
    if($valor >0){
        $this->Saldo += $valor;
        echo"O valor R$" .$valor. "foi depositado com sucesso!";
    } else {
            echo"Somente valores acima de 1 real";
        }
    }
}
?>