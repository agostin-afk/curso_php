<?php

    session_start();
    $_SESSION['nome'] = "Agosto";
    print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Olá Session</h1>
</body>
</html>