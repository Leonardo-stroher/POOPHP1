<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <style>
        .container{
            width: 400px;
            margin: 10px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form{
            display: flex;
            flex-direction: column;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Cadastro de Novo Cliente</h2>
        <form  method="post">
            <input type="text" name="nome" 
            placeholder="Informe o nome">
            <input type="text" name="numconta"
            placeholder="Informe o numero da conta" >
            <input type="number" name="saldo" 
            placeholder="Deposito mínimo R$50,00">
            <input type="submit" value="Salvar" name="add">
            <input type="reset" value="Limpar">
        </form>
    </div>
    
    <?php
        include("./config.php");

          
       if(isset($_SESSION['minha_conta'])){
       
          $obj = $_SESSION['minha_conta']; 
       } 
        
        if(isset($_POST['add']))//verifica clique do botão
        {
            if(!empty($_POST['nome'])
            && !empty($_POST['numconta'])
            && !empty($_POST['saldo'])){
          $nome = $_POST['nome'];
          $numConta = $_POST['numconta'];
          $saldo = $_POST['saldo'];
       
        
          $obj->setNome($nome);
          $obj->setNumConta($numConta);
          $obj->setSaldo($saldo);
          $obj->imprimirDados();
          echo"<br>Salvo com sucesso <br>";
          header("refresh:3,index.php");
        }else{
            echo"Não deixe os campos em branco<br>";
        }
        }
        
    ?>
</body>

</html>