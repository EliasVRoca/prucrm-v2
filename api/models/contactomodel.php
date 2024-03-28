<?php
class ContactoModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function getAll()
  {
    $connect = $this->db->connect();
    $stmt = $connect->prepare("SELECT * FROM tbl_contacto");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function insert()
  {
    try {
      // $nombre = $params['nombre'];
      // $apellido = $params['apellido'];
      // $codCar = $params['codCard'];
      // $telefono = $params['telefono'];
      // $propietarioCont = $params['propietarioCont'];
      // $codOrigenDato = $params['codOrigenDato'];

      // $connect = $this->db->connect();
      // $stms = $connect->prepare("INSERT INTO tbl_contacto (nombre_cont, apellido_cont, cod_car_1, telefono_1, propietario_cont, cod_origen_dato) VALUES(:nom, :ape, :codCar, :tel, :proCont, :codOri)");
      // $data = [':nom' => $nombre, ':ape' => $apellido, ':codCard' => $codCar, ':tel' => $telefono, ':proCont' => $propietarioCont, ':codOri' => $codOrigenDato];
      // $stms->execute($data);
      // $lastId = $connect->lastInsertId();
      // return $params;
    } catch (PDOException $e) {
      return false;
    }
  }
}
