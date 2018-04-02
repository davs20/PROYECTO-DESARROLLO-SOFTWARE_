<?php

class Conexion
{
    protected $configuracion = [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'nombreDB' => 'sistema_hotel',
        'usuario' => 'root',
        'contreaseña' => 'K17OACX' // Aqui va su contraseña, preferiblemente que todos usemos la misma.
    ];

    protected $conexion;

    public function obtenerConexion()
    {
        if ($this->conexion == null) {
            $server = "" .
                $this->configuracion['driver'] .
                ":host=" . $this->configuracion['host'] .
                ";dbname=" . $this->configuracion['nombreDB'];

            try {
                $this->conexion = new PDO($server, $this->configuracion['usuario'], $this->configuracion['contreaseña']);
                return $this->conexion;
            } catch (PDOException $exception) {
                echo "Upps algo malo paso con la conexion " . $exception->getMessage();
            }
        }
    }

    public function destruirConexion()
    {
        $this->conexion = null;
    }
}