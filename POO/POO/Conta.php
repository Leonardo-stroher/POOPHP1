<?php
class Conta
{
    private $nome;
    private $numConta;
    private $saldo;
    function __construct()
    {
        $this->nome = "Xiru da Silva";
         $this->numConta = "123-4";
         $this->saldo = 50;
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
    function getNumConta()
    {
        return $this->numConta;
    }
    function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    function getSaldo()
    {
        return $this->saldo;
    }
    function imprimirSaldo()
    {
        echo "<br>Saldo disponível R$" . $this->getSaldo();
    }
    function imprimirDados(){
        echo"<h1> Dados da Conta</h1>";
        echo"<br>Nome:".$this->nome."<br>";
        echo"Numero Conta:".$this->numConta."<br>";
        $this->imprimirSaldo();
    }
    function debitar($valor)
    {
        if ($valor <= $this->saldo) {
            $this->saldo = $this->saldo - $valor;
            echo "O valor R$" . $valor . " foi sacado com sucesso!";
        } else {
            echo "Saldo insuficiente!!";
        }
    }
    function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
            echo "<br>O valor R$" . $valor
                . " foi depositado com sucesso!<br>";
        } else {
            echo "<br>Apenas valores acima de 1 Real <br>";
        }
    }
}