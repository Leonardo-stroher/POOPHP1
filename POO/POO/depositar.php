<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despositar</title>
</head>

<body>
    <h1>DEPÓSITO</h1>
    <form method="post">
        <input type="number" name="valor" placeholder="Insira valor">
        <input type="submit" value="Depositar" name="add">
    </form>
    <?php
include "Conta.php";
session_start();

if (isset($_SESSION['minha_conta'])) {
    $obj = $_SESSION['minha_conta'];
    echo $obj->getNome(); // Remova os parênteses aqui
}

if (isset($_POST['add'])) { // Verifica o clique do botão
    if (isset($_POST['valor'])) {
        $valor = $_POST['valor'];
        $obj->depositar($valor);
        header("refresh:3,index.php");
        // $obj->imprimirDados();
    }
}
?>

</body>

</html>