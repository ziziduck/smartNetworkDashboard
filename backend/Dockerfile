FROM php:8.2-cli

# 系統套件與 PHP 擴充
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libicu-dev libonig-dev libxml2-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql intl zip

WORKDIR /var/www/html

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 複製原始碼（第一次可先留白，將由 volume 掛載）
COPY . .

# 建立必要目錄
RUN mkdir -p storage bootstrap/cache && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 8080
CMD ["php","-v"]
