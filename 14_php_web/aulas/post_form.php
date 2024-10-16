<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processamentos/cadastro.php" method="post">
        <div>
            <input type="text" name="marca" id="" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preco" id="" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" placeholder="Pelicula">Pelicula
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" placeholder="Teto solar">Teto solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" placeholder="Blindagem">Blindagem
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>