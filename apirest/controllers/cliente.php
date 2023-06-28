<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

header('Content-Type: application/json');
require_once("../config/Conectar.php");
require_once("../models/Cliente.php");

$cliente = new Cliente ();
$body = json_decode(file_get_contents("php://input"),true);
    switch ($_GET["op"]) {
        case 'GetAll':
            $datos=$cliente->get_cliente();
            echo json_encode($datos);
            break;
        case 'GetId':
            $datos=$cliente->get_cliente_id($body["id_cliente"]);
            echo json_encode($datos);
            break;
            case 'insert':
                $datos=$cliente->insert_cliente(
                    $body["id_cliente"], 
                    $body["nombre_cliente"], 
                    $body["direccion_cliente"], 
                    $body["numero_cliente"], 
                    $body["correo_cliente"]
                );
                echo json_encode("insertado correctamente");
    
            break;
        default:
        echo json_encode("Operación no válida");
            break;
    }
?>