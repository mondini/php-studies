FROM php:8.1.6-fpm

WORKDIR /var/www

# Copy custom php.ini info
COPY ./dockerconfig/php.ini /usr/local/etc/php/conf.d

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    locales \ 
    vim

RUN locale-gen pt_BR.UTF-8 && locale-gen en_US.UTF-8 && export LC_ALL=pt_BR.UTF-8 && export LANG=pt_BR.UTF-8
RUN apt-get clean && rm -rf /var/lib/apt/lists/* && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN addgroup --gid 1000 usuariogenerico
RUN adduser --disabled-password --gecos '' --uid 1000 --gid 1000 usuariogenerico

#COPY dockerconfig/start.sh /usr/local/bin/start
#RUN ["chmod", "+x", "/usr/local/bin/start"]

USER usuariogenerico
#CMD ["/usr/local/bin/start"]