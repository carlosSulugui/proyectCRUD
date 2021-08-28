<?php

class Connection
{

    public function connect(): PDO
    {
        try{
            return new PDO('pg_connect:host=localhost:5432;dbname=tareas;charset=utf8;',
                'postgres',
                '@ERT*>O',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
        }catch (Exception $e){

            die($e->getMessage());
        }
    }
}
