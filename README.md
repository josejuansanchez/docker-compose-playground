# docker-compose-playground

Repository to experiment and learn new things about Docker.

## Examples

- [Example 01](example-01-httpd). Simple Apache HTTP server with bind mount.
- [Example 02](example-02-php-apache). Simple Apache HTTP server with PHP.
- [Example 03](example-03-nginx). Simple Nginx server.
- [Example 04](example-04-nginx-php-fpm). Simple Nginx server with PHP.
- [Example 05](example-05-mysql). Simple MySQL server with a volume.
- [Example 06](example-06-mysql-env). MySQL credentials are set using environment variables in a `.env` file.
- [Example 07](example-07-mysql-phpmyadmin). Two services, one with MySQL and another with phpMyAdmin.
- [Example 08](example-08-healthcheck). MySQL with healthcheck and phpMyAdmin.
- [Example 09](example-09-lamp). LAMP stack, using a custom image for the web server.
- [Example 10](example-10-lamp-networks). LAMP stack, using a custom image for the web server. The web server and the database are in different networks.
- [Example 11](example-11-lemp). LEMP stack.
- [Example 12](example-12-wordpress). WordPress application.
- [Example 13](example-13-moodle). Moodle application.
- [Example 14](example-14-friendlyhello). Flask application.
- [Example 15](mysql-phpmyadmin-native_password). Two services, one with MySQL and another with phpMyAdmin. MySQL uses `mysql_native_password` instead of `caching_sha2_password` as default authentication plugin.