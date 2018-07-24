<?php
require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$db_conn = getenv('DB_CONNECTION');
echo $db_conn;