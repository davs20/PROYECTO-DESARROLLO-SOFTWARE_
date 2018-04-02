<?php

class ManejoDatos
{
    public static function getInstrucciones()
    {
        return $_POST['instrucciones'];
    }

    public static function getDatos()
    {
        unset($_POST['instrucciones']);
        return $_POST;
    }

    public static function getCampos()
    {
        $llave = array_keys(self::getDatos());
        return '`' . implode('`, `', $llave) . '`';
    }

    public static function getValores() {
        $llave = array_keys($_POST);
        return substr(str_repeat('?,',count($llave)),0,-1);
    }
}