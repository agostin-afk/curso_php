<?php

    $metodo_request = $_SERVER['REQUEST_METHOD'];
    echo $_SERVER['REQUEST_METHOD'];
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($metodo_request == "GET"):
    ?>
        <form action="autoprocessamento.php" method="post">
            <div>
                <input type="text" name="nome" id="" placeholder="Digite seu nome">
            </div>
            <div><input type="submit" value="Enviar"></div>
        </form>
    <?php
    else:
    ?>
    <h1>Seu nome é: <?= $nome ?></h1>
    <?php
    endif;
    ?>
</body>
</html>