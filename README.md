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

### 3. Configurar o Arquivo .env
Crie o arquivo .env baseado no arquivo .env.example:

```env
cp .env.example .env
Edite o arquivo .env e configure as variáveis de ambiente, como conexão com o banco de dados.
```

Exemplo para SQLite:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/caminho/para/seu_projeto/database/database.sqlite
```

Ou, para MySQL:

```env
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 4. Gerar chave da aplicação

```bash
php artisan key:generate
```

### 5. Criar banco de dados
Para usar SQLite, crie o arquivo:

```bash
touch database/database.sqlite
```

Execute as migrations para criar as tabelas no banco de dados:


```bash
php artisan migrate
```

### 6. Rodar o Servidor
Inicie o servidor local:

```bash
php artisan serve
```
O projeto estará disponível em http://localhost:8000/seu_nome.

### 7. Docker (Opcional)
Se você prefere rodar a aplicação em um ambiente Docker, utilize o arquivo docker-compose.yml para configurar a aplicação e o banco de dados.

```bash
Copiar código
docker-compose up --build
```

Licença
Este projeto é licenciado sob a licença MIT.
