FROM php:8.4-cli

# Diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY src/ /var/www/html

# Comando padrão
CMD ["php", "-S", "0.0.0.0:8000", "-t", "/var/www/html"]
