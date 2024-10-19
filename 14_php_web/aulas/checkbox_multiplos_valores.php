<?php

    if(isset($_POST['ingredientes'])){
        $ingredienmtes = $_POST['ingredientes'];
        print_r($ingredienmtes);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox_multiplos_valores.php" method="post">
        <div>
            <input type="checkbox" name="ingredientes[]" value="tomate">tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="beterraba">beterraba
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="ovos">ovos
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="alface">alface
        </div>
        <div><input type="submit" value="Enviar"></div>
    </form>
</body>
</html>