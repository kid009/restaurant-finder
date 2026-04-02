FROM php:8.3-fpm-bookworm

# 1. ติดตั้ง System Dependencies ทั้งหมดใน RUN เดียว (ลดจำนวน Layer)
# และต้องลบ apt cache ทิ้งทุกครั้งเพื่อลดขนาด Image (บรรทัด rm -rf...)
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    curl \
    && rm -rf /var/lib/apt/lists/*

# 2. ติดตั้ง PHP Extensions
RUN docker-php-ext-install bcmath pdo_mysql

# 3. ติดตั้ง NodeJS เวอร์ชั่น 20 LTS (เวอร์ชั่นที่เสถียรและเหมาะกับ Vite ที่สุดตอนนี้)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest \
    && rm -rf /var/lib/apt/lists/*

# 4. Copy Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

EXPOSE 9000