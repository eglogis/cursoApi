<?php

include_once 'departamento.php';
class ApiDepartamentos{

    function getAll(){
        $departamento = new Departamento();
        $departamentos = array();
        $departamentos["items"] = array();
        $res = $departamento->obtenerDepartamentos();
        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "dept_no" => $row['dept_no'],
                    "dnombre" => $row['dnombre'],
                    "loc" => $row['loc'],
                );
                array_push($departamentos["items"], $item);
            }
        
            echo json_encode($departamentos);
            
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}
?>