<?php

$variables = [
    // postgres
//    'DB_TYPE' => 'pgsql',
//    'DB_HOST' => 'localhost',
//    'DB_USERNAME' => 'postgres',
//    'DB_PASSWORD' => '@ERT*>O',
//    'DB_NAME' => 'tareas',
//    'DB_PORT' => '5432',

    // oracle
    'DB_TYPE' => 'oci',
    'DB_HOST' => 'localhost/XE',
    'DB_USERNAME' => 'system',
    'DB_PASSWORD' => 'oracle',
    'DB_NAME' => '',
    'DB_PORT' => '1521',
];

foreach ($variables as $key => $value) {
    putenv("$key=$value");
}
