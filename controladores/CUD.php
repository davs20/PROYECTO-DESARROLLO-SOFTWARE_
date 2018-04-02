<?php
include "ManejoDatos.php";
require 'Conexion.php';

class CUD
{

    public function ejecutar(): bool
    {

        $clave = explode(" ", ManejoDatos::getInstrucciones());
        $tabla = $clave[0];
        $opcionOperacion = $clave[1];

        try {
            $conexion = new Conexion();
            $pdo = $conexion->obtenerConexion();
            //Lo uso para verificiar que el query se realizo exitosamente
            //echo "<br>";
            //echo $this->opciones($opcionOperacion, $tabla, ManejoDatos::getCampos(), ManejoDatos::getValores());
            //echo "<br>";
            return $pdo->
            prepare($this->
            opciones($opcionOperacion, $tabla, ManejoDatos::getCampos(), ManejoDatos::getValores()))
                ->execute(array_values(ManejoDatos::getDatos()));
        } catch (PDOException $exception) {
            echo "Vaya algo salio mal de nuevo :(" . $exception->getMessage();
            return false;
        }
    }

    public function opciones($opcionOperacion, $tabla, $campos, $valores): string
    {
        switch ($opcionOperacion) {
            case '1':
                return "INSERT INTO `$tabla` ($campos) VALUES($valores)";
                break;
            case '2':
                return "DELETE FROM `$tabla` WHERE ($campos) = ($valores)";
                break;
            case '3':
                // return "UPDATE `$clave[0]` SET ($campos) WHERE  ($valores)"; // Falta afinar detalles, no es recomendable editarlo
                break;
            default:
                echo "Vaya parece que ocurrio algo muy malo aqui";
                break;
        }
    }

    public function seleccionarId()
    {

        $clave = explode('/', $_GET['id']);
        $id = $clave[0];
        $tabla = $clave[1];

        try {
            $conexion = new Conexion();
            $pdo = $conexion->obtenerConexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("SELECT *  FROM `$tabla` WHERE id =" . $id);
            $stmt->execute();
            return $fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
        } catch (PDOException $exception) {
            echo "Vaya algo salio mal de nuevo :(" . $exception->getMessage();
            return false;
        }
    }


}