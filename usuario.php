<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
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

    <p>Você deseja fazer um novo chamado ou acompanhar o seu chamado?</p>

    <h2 id="novo">Novo Chamado</h2>
    <details>
        <summary>Formulário para um novo chamado</summary>
        <form action="salvarchamados.php" method="post">
            <input type="text" name="nome" placeholder="Digite o seu nome:">
            <br>
            <input type="email" name="email" placeholder="Digite o seu email:">
            <br>
            <input type="text" name="titulo" placeholder="Digite o título do chamado:">
            <br>
            <input type="text" name="descricao" placeholder="Digite a descrição do chamado:">
            <br>
            <label for="prioridade">Prioridade:</label>
            <select name="prioridade" id="prioridade" required>
                <option value="baixa">Baixa</option>
                <option value="media" selected>Média</option>
                <option value="alta">Alta</option>
            </select>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </details>

    <details>
        <summary>Formulário para acompanhar um chamado</summary>
        <h2 id="acompanhar">Acompanhar Chamado</h2>
        <form action="consultar.php" method="post">
            <input type="text" name="id" placeholder="Digite o ID do chamado:">
            <br>
            <button type="submit">Consultar</button>
        </form>
    </details>
</body>

</html>