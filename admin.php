<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
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

        <h2>Área do Administrador</h2>

        <p>
            O que você deseja fazer?
        </p>


        <div class="choice-buttons">

            <button>
                <a href="consultar.php">
                    Acompanhar chamados
                </a>
            </button>

            <button>
                <a href="consultarresponsaveis.php">
                    Acompanhar responsáveis
                </a>
            </button>

        </div>
        <h2>Cadastrar Responsáveis</h2>
        <details>
            <summary>Formulário de cadastro de responsáveis</summary>
            <form action="salvar.php" method="post">
                <input type="text" name="nome" placeholder="Digite o nome do responsável:" required>
                <br>
                <input type="email" name="email" placeholder="Digite o email do responsável:" required>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
            <h2>Editar Responsáveis</h2>
            <details>
                <summary>Formulário de editar responsáveis</summary>
                <form action="editar.php" method="post">
                    <input type="text" name="nome" placeholder="Digite o novo nome do responsável:">
                    <br>
                    <input type="email" name="email" placeholder="Digite o novo email do responsável:">
                    <br>
                    <button type="submit">Editar</button>
                </form>
            </details>
</body>

</html>