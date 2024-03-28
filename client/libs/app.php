<?php
class App
{
    function __construct()
    {
        $url = strtolower($_GET['url']);
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $url[0] = empty($url[0]) ? 'main' : $url[0];
        $url[1] = empty($url[1]) ? 'main' : $url[1];

        $page = 'pages/' . $url[1] . '.php';

        if (file_exists($page)) {
            require_once($page);
        } else {
            require_once('pages/error.php');
        }
    }
}
