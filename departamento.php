<?php

include_once 'conexionMysql.php';
class Departamento extends DB{
    
    function obtenerDepartamentos(){
        $query = $this->connect()->query('SELECT * FROM departamentos');
        return $query;
    }
}
?>