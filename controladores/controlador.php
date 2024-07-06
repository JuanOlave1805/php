<?php
  require_once("../clases/aprendiz.php");
// require_once("../clases/aprendiz.php");
// if ($_SERVER["REQUEST_METHOD"] === 'POST') {

//   $nombre   = $_POST['nombre'];
//   $apellido = $_POST['apellido'];
//   $genero   = $_POST['genero'];
//   $edad     = $_POST['edad'];

//   $aprendiz = new Aprendiz();
//   $aprendiz->setNombre($nombre);
//   $aprendiz->setApellido($apellido);
//   $aprendiz->setGenero($genero);
//   $aprendiz->setEdad($edad);

//   $aprendiz->Guardar();
//   // 
// }


class controladorPersona{
  public function Guardar(){
    $aprendiz = new Aprendiz();
    $aprendiz -> setNombre($nombre);
    $aprendiz -> setApellido($apellido);
    $aprendiz -> setGenero($genero);
    $aprendiz -> setEdad($edad);
    $id = $aprendiz -> Guardar();
    $datos = $aprendiz->GetPersonaById($tabla, $id);
    return $datos;
  }
  // public function Modificar($id, $nombre, $apellido, $genero, $edad){
  //   $aprendiz = new Aprendiz();
  //   $aprendiz -> setId($id);
  //   $aprendiz -> setNombre($nombre);
  //   $aprendiz -> setApellido($apellido);
  //   $aprendiz -> setGenero($genero);
  //   $aprendiz -> setEdad($edad);
  //   $tabla = "tb_aprendiz";
  //   $data = $aprendiz->Modificar($tabla);
  //   return $data;
  // }
}
