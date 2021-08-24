<?php

class Connection
{

    public function __construct()
    {
        $this->connect_db();
    }

    public function connect_db()
    {
        $serverName = "localhost\sqlexpress";
        $connectionInfo = array(
            "Database" => "tareas",
            "UID" => "sa",
            "PWD" => "yourStrong(!)Password"
        );

        $this->conection = sqlsrv_connect($serverName, $connectionInfo);;
        if (!$this->conection) {
            echo("Conexión a la base de datos falló " . sqlsrv_errors());
        }
    }

    public function insert($nombre, $estado)
    {
        $query = "INSERT INTO datos(codigo, nombre, estado) VALUES ($nombre,$estado)";
        $result = mysqli_query($this->conection, $query);

        if ($result) {
            echo "succes";
        } else {
            echo "failure";
        }
    }
}
