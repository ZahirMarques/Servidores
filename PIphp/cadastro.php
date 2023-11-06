<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h1>Cadastro</h1>
    <!-- Formulário de cadastro -->
    <form method="post" action="actions/registro.php">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit" name="registrar">Registrar</button>
    </form>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
