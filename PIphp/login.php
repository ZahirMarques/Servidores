<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">    
<title>Login</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h1>Login</h1>
    <!-- Formulário de login -->
    <form method="post" action="actions/autenticacao.php">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit" name="login">Login</button>
    </form>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
