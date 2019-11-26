<?php

define('DB_HOST', 'mysql');
define('DB_NAME', 'lamp_db');
define('DB_USER', 'lamp_user');
define('DB_PASSWORD', 'lamp_password');

$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>
