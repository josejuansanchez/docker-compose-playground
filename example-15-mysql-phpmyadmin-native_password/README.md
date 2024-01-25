# When to use `mysql_native_password` instead of `caching_sha2_password`?

Starting from version `8.0` of MySQL Server, the default authentication plugin
used is `caching_sha2_password`, while in versions lower or equal to `5.7`,
`mysql_native_password` is used. 

The `caching_sha2_password` authentication plugin **is not supported by PHP
versions prior to 7.4**, therefore, if we want to connect to MySQL Server `8.0`
from a web application that uses a PHP version lower than 7.4, we will have to
use the `mysql_native_password` authentication plugin.