<?php
include '../config.php';

if (isset($_POST['registrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        // Realizou o registro com sucesso, agora faça o login e vá para a página de dashboard.
        session_start();
        $_SESSION['nome'] = $nome;
        header("Location: ../dashboard.php");
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
?>
