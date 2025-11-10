<?php
$configDB = array();
$configDB["host"] 		= "tan.mysql.database.azure.com";
$configDB["database"]	= "computer_store";
$configDB["username"] 	= "Trongtan";
$configDB["password"] 	= "Tan2005@";
define("HOST", "tan.mysql.database.azure.com");
define("DB_NAME", "computer_store");
define("DB_USER", "Trongtan");
define("DB_PASS", "Tan2005@");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
