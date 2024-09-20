<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviado com sucesso!</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            padding: 20px;
            background: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($_SESSION['nome']); ?>!</h1>
        <p>Seu formulário foi enviado com sucesso :D</p>
        <p>E-mail: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <p><a href="index.html">Voltar</a></p>
    </div>
    <?php
    session_unset();
    session_destroy();
    ?>
</body>
</html>
