# Projeto Laravel CRUD

Este projeto é um sistema básico de CRUD (Create, Read, Update, Delete) feito com Laravel. Ele permite que os usuários gerenciem registros no banco de dados de forma simples, incluindo funcionalidades para adicionar, visualizar, editar e excluir registros.

## Funcionalidades
- Criar novos registros
- Listar registros
- Editar registros
- Excluir registros

## Requisitos
Para rodar este projeto, você precisará ter os seguintes softwares instalados:

- [PHP 8.1 ou superior](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/)
- [SQLite, MySQL ou outro banco de dados suportado pelo Laravel](https://laravel.com/docs/11.x/database)
- [Node.js e NPM](https://nodejs.org/) (Opcional, caso utilize o Laravel Mix para compilar assets)
- Docker (Opcional)

## Instalação

### 1. Clonar o Repositório

Clone este repositório para sua máquina local:

```bash
git clone https://github.com/usuario/projeto-laravel-crud.git
cd projeto-laravel-crud
```

### 2. Instalar Dependências
Execute o seguinte comando para instalar as dependências do PHP e JavaScript:

```bash
composer install
npm install
```

Execute as migrations para criar as tabelas no banco de dados:


```bash
php artisan migrate
```

### 3. Rodar o Servidor
Inicie o servidor local:

```bash
php artisan serve
```
O projeto estará disponível em http://localhost:8000/seu_nome.

### 4. Docker
Se você prefere rodar a aplicação em um ambiente Docker, utilize o arquivo docker-compose.yml para configurar a aplicação e o banco de dados.

```bash
Copiar código
docker-compose up --build
```

# Possíveis Erros e Soluções

### 1. Erro: "Could not find driver"
Causa: Faltam drivers de banco de dados (como SQLite, MySQL ou PostgreSQL) no seu PHP.

Solução: Instale a extensão necessária para o banco de dados que você está utilizando:

Para SQLite: sudo apt-get install php-sqlite3
Para MySQL: sudo apt-get install php-mysql
Após isso, reinicie o servidor Apache ou Nginx, ou apenas reinicie o servidor local do Laravel.

### 2. Erro: "Database file does not exist"
Causa: O arquivo do banco de dados SQLite não foi criado corretamente.

Solução: Verifique se você executou o comando para criar o arquivo database.sqlite no diretório database/. Se o arquivo não existir, crie-o manualmente:

```bash
touch database/database.sqlite
```

### 3. Erro: "404 Not Found"
Causa: As rotas podem não estar configuradas corretamente.

Solução: Verifique o arquivo routes/web.php para garantir que as rotas do CRUD estão mapeadas corretamente para o controller. Utilize php artisan route:list para verificar todas as rotas disponíveis.

### 4. Erro: "View [layouts.app] not found"
Causa: O arquivo de layout padrão do Blade não está no diretório correto ou não foi criado.

Solução: Verifique se o arquivo resources/views/layouts/app.blade.php existe e contém o layout básico da aplicação.

Licença
Este projeto é licenciado sob a licença MIT.
