<?php
$configDB = array();
$configDB["host"] 		= "tan-prod.mysql.database.azure.com";
$configDB["database"]	= "computer_store";
$configDB["username"] 	= "tanadmin";
$configDB["password"] 	= "12345678@a";
define("HOST", "tan-prod.mysql.database.azure.com");
define("DB_NAME", "computer_store");
define("DB_USER", "tanadmin");
define("DB_PASS", "12345678@a");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
