<?php

$banco = new SQLite3("banco.sqlite");

$resultado = $banco->query("SELECT 
        chamados.id,
        chamados.nome,
        chamados.email,
        chamados.titulo,
        chamados.descricao,
        chamados.prioridade,
        chamados.status,
        chamados.data,
        responsaveis.nome AS responsavel_nome
    FROM chamados
    LEFT JOIN responsaveis
        ON chamados.responsavel_id = responsaveis.id");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Consultar Chamados</title>
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

        <h2>Chamados</h2>

        <?php

        while ($chamado = $resultado->fetchArray(SQLITE3_ASSOC)) {

        ?>

            <div class="chamado">

                <p><strong>ID:</strong> <?php echo $chamado["id"]; ?></p>

                <p><strong>Nome:</strong> <?php echo $chamado["nome"]; ?></p>

                <p><strong>E-mail:</strong> <?php echo $chamado["email"]; ?></p>

                <p><strong>Título:</strong> <?php echo $chamado["titulo"]; ?></p>

                <p><strong>Descrição:</strong> <?php echo $chamado["descricao"]; ?></p>

                <p><strong>Prioridade:</strong> <?php echo $chamado["prioridade"]; ?></p>

                <p><strong>Status:</strong> <?php echo $chamado["status"]; ?></p>

                <p><strong>Data:</strong> <?php echo $chamado["data"]; ?></p>

                <p>
                    <strong>Responsável:</strong>
                    <?php echo $chamado["responsavel_nome"]; ?>
                </p>


                <form
                    class="status-form"
                    action="alterarstatus.php"
                    method="post">

                    <input
                        type="hidden"
                        name="id"
                        value="<?php echo $chamado['id']; ?>">

                    <select name="status">

                        <option value="aberto">
                            Aberto
                        </option>

                        <option value="encaminhado">
                            Encaminhado
                        </option>

                        <option value="encerrado">
                            Encerrado
                        </option>

                    </select>

                    <button type="submit">
                        Alterar status
                    </button>

                </form>

            </div>

        <?php

        }

        ?>

    </main>

</body>

</html>