<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

class Empleado extends Conectar{
    public function get_empleado(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM empleado");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function get_empleado_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM empleado WHERE id_empleado=?");
            $stm->bindValue(1,$id);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function insert_empleado($id_empleado, $nombre_empleado, $usuario, $correo){
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = "INSERT INTO empleado (id_empleado, nombre_empleado, usuario, correo) VALUES (?, ?, ?, ?)";
        $stm = $conectar->prepare($stm);
        $stm->bindValue(1, $id_empleado);
        $stm->bindValue(2, $nombre_empleado);
        $stm->bindValue(3, $usuario);
        $stm->bindValue(4, $correo);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
}


?>