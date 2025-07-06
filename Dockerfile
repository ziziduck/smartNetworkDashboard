# Dockerfile
FROM php:8.2-apache

# 啟用 mod_rewrite
RUN a2enmod rewrite

# 安裝 mysqli 擴展
RUN docker-php-ext-install mysqli

# 設定 Apache 伺服器根目錄
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 複製專案檔案到容器
COPY . /var/www/html/

# 設定權限
RUN chown -R www-data:www-data /var/www/html
