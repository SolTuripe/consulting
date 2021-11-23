<?php
namespace App\Core;

class SQLUserRepository implements IUserRepository {

    private $table="users";
    private $conexion;

    function __construct()
    {
        $this->conexion = (new SQLConexion())->mysql;
    }

     function getAll(){
       
        $query = $this->conexion->query("select * FROM {$this->table}");
        $result=$query->fetchAll();
        return $result;
    }

    function save($name, $issue) {
        $this->conexion->query("INSERT INTO `{$this->table}` (`name`, `issue`) VALUES('Estefany Lopez','Nueva prueba 13')");
        
    }
}