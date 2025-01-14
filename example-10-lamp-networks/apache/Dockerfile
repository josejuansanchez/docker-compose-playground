FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive 
ENV TZ=Europe/Madrid

RUN apt update \
    && apt install -y apache2 \
    && apt install -y php \
    && apt install -y libapache2-mod-php \
    && apt install -y php-mysql \
    rm -rf /var/lib/apt/lists/*

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]