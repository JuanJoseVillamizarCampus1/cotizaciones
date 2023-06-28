<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

class Cliente extends Conectar{
    public function get_cliente(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM cliente");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function get_cliente_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM cliente WHERE id_cliente=?");
            $stm->bindValue(1,$id);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function insert_cliente($id_cliente, $nombre_cliente, $direccion_cliente, $numero_cliente, $correo_cliente){
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = "INSERT INTO cliente (id_cliente, nombre_cliente, direccion_cliente, numero_cliente, correo_cliente) VALUES (?, ?, ?, ?, ?)";
        $stm = $conectar->prepare($stm);
        $stm->bindValue(1, $id_cliente);
        $stm->bindValue(2, $nombre_cliente);
        $stm->bindValue(3, $direccion_cliente);
        $stm->bindValue(4, $numero_cliente);
        $stm->bindValue(5, $correo_cliente);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
}


?>