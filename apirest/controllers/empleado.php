<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

header('Content-Type: application/json');
require_once("../config/Conectar.php");
require_once("../models/Empleado.php");

$empleado = new Empleado ();
$body = json_decode(file_get_contents("php://input"),true);
    switch ($_GET["op"]) {
        case 'GetAll':
            $datos=$empleado->get_empleado();
            echo json_encode($datos);
            break;
        case 'GetId':
            $datos=$empleado->get_empleado_id($body["id_empleado"]);
            echo json_encode($datos);
            break;
            case 'insert':
                $datos=$empleado->insert_empleado(
                    $body["id_empleado"], 
                    $body["nombre_empleado"], 
                    $body["usuario"], 
                    $body["correo"]
                );
                echo json_encode("insertado correctamente");
    
            break;
        default:
        echo json_encode("Operación no válida");
            break;
    }
?>