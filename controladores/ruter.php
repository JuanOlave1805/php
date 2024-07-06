<?php
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    require __DIR__ . "/controlador.php";
    $ctrPersona = new controladorPersona();
    if(isset($_POST['id'])){
        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $genero   = $_POST['genero'];
        $edad     = $_POST['edad'];
        $id = $_POST['id'];

    }else{
        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $genero   = $_POST['genero'];
        $edad     = $_POST['edad'];
        $persona = $ctrPersona-> Guardar($nombre, $apellido, $genero, $edad);
        return __DIR__ . "/../public/actualizar.php";
    }
}
if($_SERVER["REQUEST_METHOD"] === 'GET'){
    print_r($_GET);
}