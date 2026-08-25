<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$prioridade = $_POST['prioridade'];

$banco = new SQLite3("banco.sqlite");

$resultado = $banco->query("
    SELECT responsaveis.id, COUNT(chamados.id) AS quantidade
    FROM responsaveis
    LEFT JOIN chamados
    ON responsaveis.id = chamados.responsavel_id
    GROUP BY responsaveis.id
    ORDER BY quantidade ASC, responsaveis.id ASC
    LIMIT 1
");

$responsavel = $resultado->fetchArray(SQLITE3_ASSOC);

$responsavel_id = $responsavel['id'];

$stmt = $banco->prepare("
    INSERT INTO chamados (nome, email, titulo, descricao, prioridade, responsavel_id)
    VALUES (:nome, :email, :titulo, :descricao, :prioridade, :responsavel_id)
");

$stmt->bindValue(":nome", $nome, SQLITE3_TEXT);
$stmt->bindValue(":email", $email, SQLITE3_TEXT);
$stmt->bindValue(":titulo", $titulo, SQLITE3_TEXT);
$stmt->bindValue(":descricao", $descricao, SQLITE3_TEXT);
$stmt->bindValue(":prioridade", $prioridade, SQLITE3_TEXT);
$stmt->bindValue(":responsavel_id", $responsavel_id, SQLITE3_INTEGER);

$stmt->execute();

echo "Chamado cadastrado com sucesso!";
