<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "meubanco"; // Nome do banco de dados

// Cria uma conexão ao servidor MySQL
$conn = new mysqli($servername, $username, $password);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o banco de dados existe
if (!$conn->select_db($database)) {
    // Se o banco de dados não existir, cria-o
    $sql = "CREATE DATABASE $database";
    if ($conn->query($sql) === TRUE) {
        echo "Banco de dados criado com sucesso!";
    } else {
        die("Erro ao criar o banco de dados: " . $conn->error);
    }
}

// Fecha a conexão ao servidor MySQL
$conn->close();

// Cria uma nova conexão usando o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
