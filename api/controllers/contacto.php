<?php
class Contacto extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function contactos()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

      $data =  $this->model->getAll();
      header('Content-Type: application/json');
      $response = ['status' => 'success', 'msg' => '', 'data' => $data];
      echo json_encode($response);
    } else {
      header('Content-Type: application/json');
      $response = ['status' => 'error', 'msg' => 'Metodo incorrecto'];
      echo json_encode($response);
    }
  }
  public function agregar()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $params = json_decode(file_get_contents('php://input'),true);
      // $data = $this->model->insert($params['data']);
      header('Content-Type: application/json');
      echo json_encode($params);
    } else {
      header('Content-Type: application/json');
      $response = ['status' => 'error', 'msg' => 'Metodo incorrecto'];
      echo json_encode($response);
    }
  }
}
