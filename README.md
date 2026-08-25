# Sistema de Chamados

## Sobre o projeto

O Sistema de Chamados é uma aplicação web desenvolvida para registro e acompanhamento de chamados.

A aplicação possui diferentes funcionalidades para usuários e administradores. Usuários podem registrar chamados e consultar suas informações, enquanto administradores podem visualizar os chamados e gerenciar os responsáveis.

O projeto foi desenvolvido utilizando PHP e SQLite, com uma interface construída em HTML e CSS.

## Funcionalidades

### Usuário

* Cadastro de novos chamados;
* Registro de nome, e-mail, título e descrição do problema;
* Consulta de chamados através do ID;
* Visualização das informações do chamado;
* Visualização do responsável atribuído ao chamado.

### Administrador

* Consulta dos chamados cadastrados;
* Visualização das informações dos chamados;
* Consulta dos responsáveis cadastrados;
* Cadastro de novos responsáveis.

## Tecnologias utilizadas

* HTML5
* CSS3
* PHP
* SQLite
* Git

## Banco de dados

O projeto utiliza o SQLite para armazenamento dos dados.

O banco possui duas tabelas principais:

### `chamados`

Responsável por armazenar os chamados registrados no sistema.

Principais campos:

* `id`
* `nome`
* `email`
* `titulo`
* `descricao`
* `status`
* `data`
* `responsavel_id`

### `responsaveis`

Responsável por armazenar os responsáveis pelos chamados.

Principais campos:

* `id`
* `nome`
* `email`

A tabela `chamados` possui uma chave estrangeira (`responsavel_id`) relacionada à tabela `responsaveis`. Essa relação permite identificar qual responsável está associado a cada chamado.

## Estrutura do projeto

```text
Sistema-de-Chamados/
│
├── index.php
├── usuario.php
├── admin.php
├── consultar.php
├── consultarresponsaveis.php
│
├── salvar.php
├── salvarchamados.php
├── cadastrarresponsaveis.php
├── criarbanco.php
│
├── banco.sqlite
├── schema.sql
│
└── style.css
```

## Como executar

### Pré-requisitos

Para executar o projeto, é necessário ter o PHP instalado.

### 1. Clonar ou baixar o projeto

Faça o download do projeto ou clone o repositório utilizando o Git.

### 2. Abrir a pasta do projeto

Abra a pasta do projeto no VS Code.

### 3. Iniciar o servidor PHP

Abra o terminal na pasta do projeto e execute:

```bash
php -S localhost:8000
```

### 4. Acessar a aplicação

Abra o navegador e acesse:

```text
http://localhost:8000
```

## Funcionamento

O fluxo principal da aplicação é:

```text
Usuário
   ↓
Cadastro do chamado
   ↓
Armazenamento no banco de dados
   ↓
Atribuição de responsável
   ↓
Consulta do chamado
   ↓
Acompanhamento
```

Os chamados possuem três estados previstos no sistema:

* `aberto`
* `encaminhado`
* `encerrado`

## Interface

A interface foi desenvolvida buscando simplicidade e facilidade de navegação.

A aplicação utiliza uma identidade visual baseada em três cores principais:

* Branco;
* Azul;
* Cinza escuro.

A navegação entre as principais áreas do sistema é realizada através de uma barra superior presente nas páginas da aplicação.

## Status do projeto

O projeto encontra-se em desenvolvimento.

As funcionalidades principais de cadastro e consulta de chamados e responsáveis estão implementadas. Algumas funcionalidades ainda estão em desenvolvimento.

### Funcionalidades a desenvolver

* Implementação completa da alteração de status dos chamados;
* Implementação da edição dos dados dos responsáveis;
* Aprimoramento da distribuição automática dos chamados entre os responsáveis;
* Melhorias na consulta e acompanhamento dos chamados;
* Refinamentos na interface e na experiência de uso;
* Validações e tratamentos adicionais para diferentes situações de uso.

Essas funcionalidades fazem parte dos próximos passos planejados para a evolução do projeto.

