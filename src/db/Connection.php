<?php

class Connection
{
    private $conection;
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $dbname="tarea";

    public function __construct()
    {
        $this->connect_db();
    }
    public function connect_db()
    {
        $this->conection = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if (!$this->conection) {
            echo("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

    public function sanitiza($var)
    {
        $return = mysqli_real_escape_string($this->conection, $var);
        return $return;
    }

    public function insert($nombre , $estado)
    {
        $query = "INSERT INTO datos(codigo, nombre, estado) VALUES ($nombre,$estado)";
        $result = mysqli_query($this->conection, $query);

        if($result){
            echo "succes";
        }else{
            echo "failure";
        }
    }
}
