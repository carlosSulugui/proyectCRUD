<?php

class Connection
{
    public function connect(): PDO
    {
        $type = env('DB_TYPE');
        $host = env('DB_HOST');
        $db_name = env('DB_NAME');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        try {
            $dsn = $type . ':host=' . $host . ';dbname=' . $db_name;
            return new PDO($dsn, $username, $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
