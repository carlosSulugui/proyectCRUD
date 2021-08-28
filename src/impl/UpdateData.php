<?php

    include("./db/Connection.php");

    class UpdateData
    {
        // para eliminar solo vamos a utilizar el campo status 0/1 cuando se consulta se filtra por el campo status
        // select * from empleados  where status <> 0;
        
        protected $name;
        protected $last_name;
        protected $email;
        protected $status;
        protected $id;
        
        public function __construct($nombre, $apellido, $correo, $estado, $id=''){
            $db = new Connection();

            $this->name = $nombre;
            $this->last_name = $apellido;
            $this->email = $correo;
            $this->status = $estado;
            $this->id= $id;
        }

        public function update(){
            $db = new Connection();
            $update = " UPDATE usuario SET  nombre = '$this->name', Snombre = '$this->last_name', email = '$this->email', estatus = '$this->status'
            WHERE id='$this->id' ";
            $resultado = sqlsrv_query($db,$update);
            if(!$resultado){
            echo "Error al actualizar los datos";
            }else{
            echo "Datos actualizados correctamente";
        }

    }
    
    }

?>

