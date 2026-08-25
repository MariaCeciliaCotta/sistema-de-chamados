<?php
$nome = $_POST['nome'];
$email = $_POST['email'];

$banco = new SQLite3("banco.sqlite");

$stmt = $banco->prepare("
    INSERT INTO responsaveis (nome, email)
    VALUES (:nome, :email)
");

$stmt->bindValue(":nome", $nome, SQLITE3_TEXT);
$stmt->bindValue(":email", $email, SQLITE3_TEXT);

$stmt->execute();

echo "Responsável cadastrado com sucesso!";
