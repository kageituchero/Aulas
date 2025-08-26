<?php
include 'conexao.php';

function listarAutores($conn) {
    $stmt = $conn->query("SELECT * FROM autores");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function criarAutor($conn, $nome, $nacionalidade, $ano_nascimento) {
    $stmt = $conn->prepare("INSERT INTO autores (nome, nacionalidade, ano_nascimento) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $nacionalidade, $ano_nascimento]);
}

function atualizarAutor($conn, $id, $nome, $nacionalidade, $ano_nascimento) {
    $stmt = $conn->prepare("UPDATE autores SET nome = ?, nacionalidade = ?, ano_nascimento = ? WHERE id = ?");
    $stmt->execute([$nome, $nacionalidade, $ano_nascimento, $id]);
}

function excluirAutor($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM autores WHERE id = ?");
    $stmt->execute([$id]);
}


?>
