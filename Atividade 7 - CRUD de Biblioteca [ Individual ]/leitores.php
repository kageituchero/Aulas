<?php
include 'conexao.php';

function listarLeitores($conn) {
    $stmt = $conn->query("SELECT * FROM leitores");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function criarLeitor($conn, $nome, $email, $telefone) {
    $stmt = $conn->prepare("INSERT INTO leitores (nome, email, telefone) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $telefone]);
}

function atualizarLeitor($conn, $id, $nome, $email, $telefone) {
    $stmt = $conn->prepare("UPDATE leitores SET nome = ?, email = ?, telefone = ? WHERE id = ?");
    $stmt->execute([$nome, $email, $telefone, $id]);
}

function excluirLeitor($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM leitores WHERE id = ?");
    $stmt->execute([$id]);
}


?>
