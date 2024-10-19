<?php

    if(isset($_FILES)){
        print_r($_FILES);
    }

?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="enviar_arquivos.php" method="post" enctype="multipart/form-data">
        <div><input type="file" name="arqv"></div>
        <div><input type="submit" value="Enviar"></div>
    </form>
</body>
</html>