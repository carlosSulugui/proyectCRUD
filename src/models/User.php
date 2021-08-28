<?php

class User extends Connection{

    public function all(){
        try{
            $result = parent::connect()->prepare("select * from empleados where status != '0'");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("insert into empleados (name, last_name, email, status) values (?, ?, ?, ?)");
            //values ('nombres', 'apellido ', 'email', 1);
            $result->bindParam(1, $data['name'], PDO::PARAM_STR);
            $result->bindParam(2, $data['last_name'], PDO::PARAM_STR);
            $result->bindParam(3, $data['email'], PDO::PARAM_STR);
            $result->bindParam(4, $data['status'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Errro: " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("select * from empleados where id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            //insert into empleados (id, name, last_name, email, status)
            $result = parent::connect()->prepare("update empleados set name = ?, last_name = ?, email = ?, status = ? where id = ?");
            $result->bindParam(1, $data['name'], PDO::PARAM_STR);
            $result->bindParam(2, $data['last_name'], PDO::PARAM_STR);
            $result->bindParam(3, $data['email'], PDO::PARAM_STR);
            $result->bindParam(4, $data['status'], PDO::PARAM_STR);
            $result->bindParam(5, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error " . $e->getMessage());
        }
    }
}
