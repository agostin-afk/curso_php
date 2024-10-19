<?php
    $validacoes = [];
    if(isset($_POST) > 0){
    if(!$_POST['nome']){
        $validacoes[] = 'por favor, insira um nome de usuario';
    }
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
    <?php if(count($validacoes)): ?>
        <ul>
        <?php foreach($validacoes as $validacao): ?>
            <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    

    <form action="validacao_forms.php" method="post">
        <div>
            Nome: <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            Email: <input type="text" name="email" placeholder="Digite seu Email">
        </div>
        <div>
            Senha: <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div>
            Confirmar senha: <input type="password" name="confirm_senha" placeholder="Confirme a sua senha">
        </div>
        <div><input type="submit" value="Enviar"></div>
    </form>
</body>
</html>