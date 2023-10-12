<?php

$DB_SERVER = getenv("MVC_SERVER") ?: "192.168.10.16";
$DB_DATABASE = getenv("MVC_DB") ?: "canevet_romain_PDO_Slam5";
$DB_USER = getenv("MVC_USER") ?: "canevet_romain";
$DB_PASSWORD = getenv("MVC_TOKEN") ?: "9trIwvDV";
$DEBUG = getenv("MVC_DEBUG") ?: true;

return array(
    "DB_USER" => $DB_USER,
    "DB_PASSWORD" => $DB_PASSWORD,
    "DB_DSN" => "mysql:host=$DB_SERVER;dbname=$DB_DATABASE;charset=utf8",
    "DEBUG" => $DEBUG
);

