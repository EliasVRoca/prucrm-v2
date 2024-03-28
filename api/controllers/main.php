<?php
class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function main($params)
    {
        $this->model->insert();
    }
}
