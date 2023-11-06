<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h1>Dashboard</h1>
    <p>Bem-vindo, <?php echo $_SESSION['nome']; ?></p>
    <a href="actions/logout.php">Sair</a>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
