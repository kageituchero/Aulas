<?php
include 'conexao.php';

function listarLivros($conn, $filtro = null) {
    $query = "SELECT * FROM livros";
    if ($filtro) {
        $query .= " WHERE genero = :genero OR ano_publicacao = :ano OR id_autor = :autor";
    }
    $stmt = $conn->prepare($query);
    if ($filtro) {
        $stmt->execute([':genero' => $filtro['genero'], ':ano' => $filtro['ano'], ':autor' => $filtro['autor']]);
    } else {
        $stmt->execute();
    }
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function criarLivro($conn, $titulo, $genero, $ano_publicacao, $id_autor) {
    $ano_atual = date("Y");
    if ($ano_publicacao > 1500 && $ano_publicacao <= $ano_atual) {
        $stmt = $conn->prepare("INSERT INTO livros (titulo, genero, ano_publicacao, id_autor) VALUES (?, ?, ?, ?)");
        $stmt->execute([$titulo, $genero, $ano_publicacao, $id_autor]);
    } else {
        throw new Exception("Ano de publicação inválido.");
    }
}

function atualizarLivro($conn, $id, $titulo, $genero, $ano_publicacao, $id_autor) {
    $stmt = $conn->prepare("UPDATE livros SET titulo = ?, genero = ?, ano_publicacao = ?, id_autor = ? WHERE id = ?");
    $stmt->execute([$titulo, $genero, $ano_publicacao, $id_autor, $id]);
}

function excluirLivro($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM livros WHERE id = ?");
    $stmt->execute([$id]);
}

function listarLivrosComFiltro($conn, $filtro = null, $pagina = 1, $itensPorPagina = 10) {
    $offset = ($pagina - 1) * $itensPorPagina;
    $query = "SELECT * FROM livros";
    if ($filtro) {
        $query .= " WHERE genero = :genero OR ano_publicacao = :ano OR id_autor = :autor";
    }
    $query .= " LIMIT :offset, :itensPorPagina";
    $stmt = $conn->prepare($query);
    if ($filtro) {
        $stmt->bindParam(':genero', $filtro['genero']);
        $stmt->bindParam(':ano', $filtro['ano']);
        $stmt->bindParam(':autor', $filtro['autor']);
    }
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->bindParam(':itensPorPagina', $itensPorPagina, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>
