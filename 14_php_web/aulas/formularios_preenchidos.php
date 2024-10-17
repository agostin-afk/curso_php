<?php

    $usuarios = [
        'nome' => 'Agosto',
        'idade' => 45,
        'profissao' => 'Estudante',
    ];

    if($usuarios){
        $nome = $usuarios['nome'];
        $idade = $usuarios['idade'];
        $profissao = $usuarios['profissao'];
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
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="idade" placeholder="Digite a sua idade" value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="profissao" placeholder="Informe sua profissao" value="<?= $profissao ?>">
        </div>
        <div><input type="submit" value="Enviar"></div>
    </form>
</body>
</html>