<?php

$banco = new SQLite3("banco.sqlite");

$resultado = $banco->query("SELECT * FROM responsaveis");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Responsáveis - Sistema de Chamados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="nav-bar">

        <div class="logo">
            <h1>Sistema de Chamados</h1>
        </div>

        <div class="nav-list">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="usuario.php">Novo Chamado</a></li>
                <li><a href="consultar.php">Consultar</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>

    </nav>


    <main class="page-container">

        <h2>Responsáveis cadastrados</h2>

        <?php

        while ($responsavel = $resultado->fetchArray(SQLITE3_ASSOC)) {

        ?>

            <div class="responsavel">

                <p>
                    <strong>ID:</strong>
                    <?php echo $responsavel["id"]; ?>
                </p>

                <p>
                    <strong>Nome:</strong>
                    <?php echo $responsavel["nome"]; ?>
                </p>

                <p>
                    <strong>E-mail:</strong>
                    <?php echo $responsavel["email"]; ?>
                </p>

            </div>

        <?php

        }

        ?>

    </main>

</body>

</html>