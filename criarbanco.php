<?php

$banco = new PDO('sqlite:banco.sqlite');

$schema = file_get_contents('schema.sql');

$banco->exec($schema);

echo "Banco criado com sucesso!";
