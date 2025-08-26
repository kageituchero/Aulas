<?php
include 'conexao.php';

function listarEmprestimos($conn) {
    $stmt = $conn->query("SELECT * FROM emprestimos");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function criarEmprestimo($conn, $id_livro, $id_leitor, $data_emprestimo, $data_devolucao) {
    $stmt = $conn->prepare("INSERT INTO emprestimos (id_livro, id_leitor, data_emprestimo, data_devolucao) VALUES (?, ?, ?, ?)");
    $stmt->execute([$id_livro, $id_leitor, $data_emprestimo, $data_devolucao]);
}

function listarEmprestimosAtivos($conn) {
    $stmt = $conn->query("SELECT * FROM emprestimos WHERE data_devolucao IS NULL");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function listarEmprestimosConcluidos($conn) {
    $stmt = $conn->query("SELECT * FROM emprestimos WHERE data_devolucao IS NOT NULL");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function listarLivrosEmprestadosPorLeitor($conn, $id_leitor) {
    $stmt = $conn->prepare("SELECT * FROM emprestimos WHERE id_leitor = ?");
    $stmt->execute([$id_leitor]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>
