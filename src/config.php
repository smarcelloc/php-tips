<?php

define('DIR_ROOT', dirname(__FILE__, 2));

$dotenv = Dotenv\Dotenv::createImmutable(DIR_ROOT);
$dotenv->load();

/**
 * DATA LAYER
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => $_ENV['DB_HOST'] ?? "localhost",
    "port" => $_ENV['DB_PORT'] ?? "3306",
    "dbname" => $_ENV['DB_NAME'],
    "username" => $_ENV['DB_USER'] ?? "root",
    "passwd" => $_ENV['DB_PASSWORD'] ?? "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
