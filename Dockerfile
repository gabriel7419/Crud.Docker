# Usar a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instalar dependências necessárias para o Laravel
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    zip \
    unzip

# Instalar extensões do PHP
RUN docker-php-ext-install pdo pdo_sqlite

# Habilitar o módulo de reescrita no Apache para o Laravel
RUN a2enmod rewrite

# Copiar a configuração customizada do Apache
COPY laravel.conf /etc/apache2/sites-available/
COPY laravel.conf /etc/apache2/sites-enabled/

# Copiar os arquivos do projeto Laravel para o container
COPY . /var/www/html

# Definir as permissões corretas para o diretório de armazenamento e cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expor a porta 80 para o Apache
EXPOSE 80

# Definir o diretório de trabalho
WORKDIR /var/www/html
