<?php

class Connection
{

    public function connect(): PDO
    {
        try{
            return new PDO('pgsql:host=localhost;dbname=tareas;',
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
