<?php
class Errors
{
    function __construct()
    {
    }

    public function errorController()
    {
        $result = [
            'status' => 'error',
            'msg' => 'Error, Controlador no encontrado'
        ];

        header('Content-Type: application/json');
        echo json_encode($result);
    }
    public function errorMethod()
    {
        $result = [
            'status' => 'error',
            'msg' => 'Error, Metodo no encontrado'
        ];

        header('Content-Type: application/json');
        echo json_encode($result);
    }
}
