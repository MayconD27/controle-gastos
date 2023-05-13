<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida</title>
</head>
<body>
    <?php
        include_once "bd.php";
        $nome = $_POST['nome'];
        $valor = floatval($_POST['valor']);
        require_once "bd.php";
        $sql = "INSERT INTO contas VALUES (NULL,'$nome',$valor)";
        $resultado = $bd->prepare($sql);
        $resultado->execute();
        header("location: index.php")
    ?> 

</body>
</html>
