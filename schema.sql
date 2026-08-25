CREATE TABLE IF NOT EXISTS responsaveis (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    email TEXT
);

CREATE TABLE IF NOT EXISTS chamados (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    email TEXT NOT NULL,
    titulo TEXT NOT NULL,
    descricao TEXT,
    prioridade TEXT NOT NULL DEFAULT 'media',
    status TEXT NOT NULL DEFAULT 'aberto',
    data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    responsavel_id INTEGER,
    FOREIGN KEY (responsavel_id) REFERENCES responsaveis(id)
);