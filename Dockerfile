FROM php:7

RUN apt-get -y update && apt-get -y install git

COPY commands.sh /scripts/commands.sh
COPY rocketeer.phar /usr/bin/rocketeer
COPY . ./
COPY php.ini /usr/local/etc/php/php.ini

RUN chmod +x /usr/bin/rocketeer
RUN docker-php-ext-install pcntl
RUN ["chmod", "+x", "/scripts/commands.sh"]

ENTRYPOINT ["/scripts/commands.sh"]

WORKDIR /
