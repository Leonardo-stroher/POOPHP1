<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
    .container{
        width: 400px;
        padding: 20px;
        border: 2px solid black;
        display: flex;
        flex-direction: column;
        margin: 10px auto;
        background-color: aquamarine;
        align-items: center;
    }

    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    form input{
        width: 300px;
        padding: 10px;
        margin-top: 10px;
    }
</style>
<body>
    <div class="container">
        <h2>Cadastro de novos clientes</h2>
        <form action="#" method="post">

            <input type="text" name="nome" placeholder="Informe o nome">

            <input type="text" name="numConta" placeholder="Informe o numero da conta">

            <input type="number" name="saldo" placeholder="Deposito minimo de 1 R$">

            <input type="submit" value="Salvar" name="add">

            <input type="reset" value="Limpar">
        </form>
    </div>
    <?php
    Include ("./Conta.php");
    if(isset($_POST["add"])){

        if(!empty($_POST['nome']) && !empty($_POST['numConta']) && !empty($_POST['saldo']))
        {
        $nome = $_POST['nome'];
        $numConta = $_POST['numConta'];
        $Saldo = $_POST['saldo'];
        var_dump($nome, $numConta, $Saldo);
        $obj= new Conta();
        $obj->setNome($nome);
        $obj->setNumConta($numConta);
        $obj->setSaldo($Saldo);
        $obj->imprimirSaldo();
            echo"Salvo com sucesso!";
            header("refresh:3,./Index.php");
    }else{
        echo"Não deixe os campos em branco<br>";
    }
    }
    ?>
</body>

</html>