<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['Nome'] ?? '';
    $sobrenome = $_POST['Sobrenome'] ?? '';
    $email = $_POST['Email'] ?? '';
    $assunto = $_POST['Assunto'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';


    $informacoes = "Nome: $nome $sobrenome\nEmail: $email\nAssunto: $assunto\nMensagem: $mensagem\n\n";
    $arquivo = 'informacoes_contato.txt';

    file_put_contents($arquivo, $informacoes, FILE_APPEND | LOCK_EX);

    header("Location: Feedback.html");
    exit();
}
?>