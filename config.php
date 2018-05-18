<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'anuki');
define('DB_PASSWORD', '123456');
define('DB_DATABASE', 'anuki');

class DB_Class {

    function __construct() {
        $connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die('Oops connection error -> ' . mysql_error());
        mysql_select_db(DB_DATABASE, $connection) or die('Database error -> ' . mysql_error());
    }

}
?>
