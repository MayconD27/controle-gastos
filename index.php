<?php

    require_once "bd.php";
    $sql = "SELECT * FROM contas"; 
    $resultado = $bd->query($sql); //query leva o select para o banco de dados
    $registro = $resultado->fetchAll(); // fetchAll transforma a informação em um vetor

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/table.css">
    <link rel="stylesheet" href="style/button.css">
    
    <title>Despezas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  
   <section>
   <h1>Minhas Despezas</h1> 
   <div class="cards">
    <div class="total">
        <h3>Valor Total dos Gastos </h3>
        <p>
            <?php
                require_once "bd.php";
                $sql = "SELECT SUM(valor) AS 'soma_despezas' FROM contas"; 
                $resultado = $bd->query($sql); 
                $resultado->execute();
                $registroSUM = $resultado->fetchAll();
                $soma = $registroSUM[0]['soma_despezas'];
                echo"R$". number_format($soma,2,',','.');
            ?>
        </p>
        
    </div>
    <div class="total qnt">
        <h3>Quantidade total de itens </h3>
        <p>
            <?php
                require_once "bd.php";
                $sql = "SELECT COUNT(valor) AS 'cont' FROM contas"; 
                $resultado = $bd->query($sql); 
                $resultado->execute();
                $registroQnt = $resultado->fetchAll();
                $qnt = $registroQnt[0]['cont'];
                echo"$qnt";
            ?>
        </p>
        
    </div>
   </div>
   <table>
            <thead class="thead">
                <th>Despeza</th>
                <th>Valor</th>
    </table>
   <div class='camp_table'>

        <table> 
            <a href=""></a>
            <?php
                foreach($registro as $r){
                    $nome = $r['nome'];
                    $valor = $r['valor'];
                    $id = $r['id'];
                    echo "<tr>
                    <td>$nome</td>
                    <td>R$ ". number_format($valor,2,',','.')."</td>
                    <td><a onclick='deletar($id)'><i class='bi bi-trash3-fill'></i></a></td>
                    </tr>";
                }
            ?>
        </table>
    </div>
    <div class="card_button">
        <a href="inserirValor.php" class="add">Inserir Novos Gastos<i class="bi bi-download"></i></a>
        <a href="limpar.php" class="clear">Limpar</a>

    </div>
    
   </section>

   <script src="js/delete.js"></script>
</body>
</html>
