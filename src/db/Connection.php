<?php

class Connection
{

    public function connect(){
        try{
            return new PDO('sqlsrv:host=localhost;dbname=tareas;charset=utf8;',
                'sa',
                'yourStrong(!)Password',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
}
