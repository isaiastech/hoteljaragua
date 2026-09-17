FROM php:8.4-apache

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    git \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && rm -rf /var/lib/apt/lists/*

# Configurar e instalar extensões do PHP
RUN docker-php-ext-configure intl \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install \
        intl \
        mysqli \
        pdo \
        pdo_mysql \
        gd

# Habilitar rewrite e cache de arquivos estáticos
RUN a2enmod rewrite expires headers

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Pasta do app
WORKDIR /var/www/html

EXPOSE 80