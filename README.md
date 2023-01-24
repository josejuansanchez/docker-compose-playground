# docker-compose-playground

Repository to experiment and learn new things about Docker.

## Examples

- [Example 01](httpd). Simple Apache HTTP server.
- [Example 02](mysql). Simple MySQL server.
- [Example 03](mysql-phpmyadmin). Two services, one with MySQL and another with phpMyAdmin.
- [Example 04](mysql-phpmyadmin-native_password). Two services, one with MySQL and another with phpMyAdmin. MySQL uses `mysql_native_password` instead of `caching_sha2_password` as default authentication plugin.
- [Example 05](mysql-env). MySQL credentials are set using environment variables in a `.env` file.
- [Example 06](php-apache). Simple PHP application.
- [Example 07](php-apache-mysql). PHP application with MySQL database.
- [Example 08](lamp). LAMP stack, using a custom image for the web server.
- [Example 09](lamp-networks). LAMP stack, using a custom image for the web server. The web server and the database are in different networks.
- [Example 10](lemp). LEMP stack.
- [Example 11](wordpress). WordPress application.
- [Example 12](moodle). Moodle application.
- [Example 13](friendlyhello). Flask application.