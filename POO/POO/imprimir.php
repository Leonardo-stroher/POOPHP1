<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Saldo</title>
</head>

<body>
    <?php
   include "./Conta.php";
    session_start();
    if (isset($_SESSION['minha_conta'])) {
        $obj = $_SESSION['minha_conta'];
    }
    echo "<h1>SALDO DO CLIENTE</H1>";

    $obj->imprimirDados();
    header("refresh:3,index.php");
    ?>
</body>

</html>