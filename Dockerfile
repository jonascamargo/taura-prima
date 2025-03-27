FROM alpine:3.19

RUN apk add --no-cache \
    php82 \
    php82-apache2 \
    apache2 \
    apache2-utils

# Habilitar mod_rewrite
RUN sed -i 's/#LoadModule rewrite_module/LoadModule rewrite_module/' /etc/apache2/httpd.conf

# Configurar Apache para usar a porta 88 e diretório raiz
RUN sed -i 's/80/3000/g' /etc/apache2/httpd.conf && \
    sed -i 's#/var/www/localhost/htdocs#/var/www/html#' /etc/apache2/httpd.conf

# Configurar permissões do .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/httpd.conf

# Criar diretório e ajustar permissões
RUN mkdir -p /var/www/html && \
    chown -R apache:apache /var/www/html

# Iniciar Apache
CMD ["httpd", "-D", "FOREGROUND"]