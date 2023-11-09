<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
      session_start(); // Inicia a sessão
      require_once './Conta.php'; // Inclua sua classe Conta
      $obj = new Conta();
      $_SESSION['minha_conta'] = $obj; // Armazene o objeto na sessão
?>