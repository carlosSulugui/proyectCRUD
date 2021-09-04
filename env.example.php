<?php

$variables = [
    'DB_TYPE' => 'pgsql',
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'postgres',
    'DB_PASSWORD' => 'postgres',
    'DB_NAME' => 'db',
    'DB_PORT' => '5432',
];

foreach ($variables as $key => $value) {
    putenv("$key=$value");
}
