<?php
  include('./clases/DataBase.php');

  $conect = new Database();

  $conect -> connect_db();
  if($conect){
    echo "conexion correcta";
  }else{
    echo "la conexion fallo";
  }
?>