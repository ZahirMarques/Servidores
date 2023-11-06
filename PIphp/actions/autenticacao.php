<?php
include '../config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $nome = $row['nome'];
            session_start();
            $_SESSION['nome'] = $nome;
            header("Location: ../dashboard.php");
        } else {
            echo "Senha incorreta";
        }
    } else {
        echo "Usuário não encontrado";
    }
}
?>
