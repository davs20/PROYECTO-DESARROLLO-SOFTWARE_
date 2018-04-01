<?php

class Receptor
{
    protected $datos;

    public function getPost(){
        $this->setDatos($_POST);
        var_dump($this->getDatos());
    }

    public function getDatos()
    {
        return $this->datos;
    }

    public function setDatos($datos): void
    {
        $this->datos = $datos;
    }

}