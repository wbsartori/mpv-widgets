FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    nano \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini" \
  && sed -i 's/^max_execution_time = .*/max_execution_time = 120/' "$PHP_INI_DIR/php.ini" \
  && sed -i 's/^memory_limit = .*/memory_limit = 512M/' "$PHP_INI_DIR/php.ini" \
  && sed -i 's/^post_max_size = .*/post_max_size = 64M/' "$PHP_INI_DIR/php.ini" \
  && sed -i 's/^upload_max_filesize = .*/upload_max_filesize = 64M/' "$PHP_INI_DIR/php.ini"

RUN pecl install xdebug-3.1.6 \
    && docker-php-ext-enable xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini" \
    && echo "xdebug.mode=coverage" >> "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini" \
    && echo "xdebug.start_with_request=yes" >> "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini" \
    && echo "xdebug.client_host=host.docker.internal" >> "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini" \
    && echo "xdebug.client_port=9003" >> "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini" \
    && echo "xdebug.log=/tmp/xdebug.log" >> "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini"

WORKDIR /var/www
COPY . /var/www

RUN chown -R www-data:www-data /var/www

EXPOSE 9000