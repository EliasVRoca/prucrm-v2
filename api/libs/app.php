<?php
// ---
require_once('controllers/errors.php');
// ---
class App
{
    function __construct()
    {
        $url = strtolower($_GET['url']);
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $params = '';
        $url[0] = empty($url[0]) ? 'main' : $url[0];
        $url[1] = empty($url[1]) ? 'main' : $url[1];

        for ($i = 2; $i < count($url); $i++) {
            $params .= $url[$i] . ',';
        }
        $params = trim($params, ",");

        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($params);
            } else {
                $controller = new Errors();
                $controller->errorMethod();
            }
        } else {
            $controller = new Errors();
            $controller->errorController();
        }
    }
}
