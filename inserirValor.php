<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/insert.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Inserir novos valores</title>
</head>
<body>
    
    <section>
        <h1>Inserção de Gastos</h1>
        <form action="inserir.php" method="post">
            <div class="camp">
                <label for="nome" >Despeza</label>
                <input type="text" name ="nome" id ="nome" placeholder="ex:Luz">
            </div>
            <div class="camp">
                <label for="valor">Valor</label>
                <input type="text" name="valor" placeholder="200.00" id="money" >
            </div>
            <div class="campb">
                <input type="submit" value="Adicionar">
            </div>
        </form>
        
        <div class="rede">
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-whatsapp"></i></a>
            <a href=""><i class="bi bi-github"></i></a> 
        </div>
    </section>

</body>
</html>