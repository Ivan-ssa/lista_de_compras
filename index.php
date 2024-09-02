
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
    <title>Lista de Compras</title>
    <style>
       
    </style>
</head>
<body>
    <h1>Lista de Compras</h1>
    <div class="container">
        <h2>Itens de compra</h2>
        <div class="formulario_grupo">
            <div>
                <label for="nome_item">Nome do Item</label><br>
                <input type="text" id="nome_item" name="nome_item" maxlength="50" placeholder="Digite o item">
            </div>
            <div>
                <label for="qtde">Quantidade</label><br>
                <input type="text" id="qtde" name="qtde" maxlength="5" placeholder="Digite a quantidade">
            </div>
            <div>
                <label for="valor">Valor</label><br>
                <input type="number" id="valor" name="valor" max="9999" placeholder="Digite o valor">
            </div>
        </div>
        <button onclick="adicionarItem()">Adicionar</button> 
    
        <div class="item-list" id="itemList"></div>
    </div>

    <script>
        
    </script>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
</head>
<body>
    <h1>Lista de Compras</h1>
    <div class="container">
        <h2>Itens de compra</h2>
        <div class="formulario_grupo">
            <div>
                <label for="nome_item">Nome do Item</label><br>
                <input type="text" id="nome_item" name="nome_item">
            </div>
            <div>
                <label for="qtde">Quantidade</label><br>
                <input type="text" id="qtde" name="qtde">
            </div>
            <div>
                <label for="valor">Valor</label><br>
                <input type="number" id="valor" name="valor">
            </div>
        </div>
        <button onclick="adicionarItem()">Adicionar</button> 
    
        <div class="item-list" id="itemList"></div>
    </div> -->