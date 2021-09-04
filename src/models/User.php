<?php

class User extends Connection
{

    public function all()
    {
        try {
            $result = parent::connect()->prepare("select * from empleados where status != '0'");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function register($data)
    {
        try {
            $result = parent::connect()->prepare("insert into empleados (id, name, status) values ((select count(*) + 1 from empleados),?, ?)");
            $result->bindParam(1, $data['name']);
            $result->bindParam(2, $data['status']);
            return $result->execute();
        } catch (Exception $e) {
            die("Errro: " . $e->getMessage());
        }
    }

    public function find($id)
    {
        try {
            $result = parent::connect()->prepare("select * from empleados where id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update_register($data)
    {
        try {
            $result = parent::connect()->prepare("update empleados set name = ?, status = ? where id = ?");
            $result->bindParam(1, $data['name']);
            $result->bindParam(2, $data['status']);
            $result->bindParam(3, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("Error " . $e->getMessage());
        }
    }

    public function delete_register($id)
    {
        try {
            $result = parent::connect()->prepare("update empleados set status = '0' where id = ?");;
            $result->bindParam(1, $id['id'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("Error " . $e->getMessage());
        }
    }
}
