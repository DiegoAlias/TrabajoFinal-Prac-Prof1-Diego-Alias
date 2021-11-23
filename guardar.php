<?php

require("conexion.php");

if($conex){
    echo"todo ok";
}
/*
if (isset($_POST['enviar'])) {
    echo 'longitud: ' . strlen($_POST['categoria']); 
    if (
        strlen($_POST['categoria']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['fechaDeInscripcion']) >= 1 &&
        strlen($_POST['electro']) >= 1 &&
        strlen($_POST['ergometria']) >= 1 &&
        strlen($_POST['rayosTorax']) >= 1
    ) {
        $categoria = $_POST['categoria'];
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $fechaDeInscripcion = $_POST['fechaDeInscripcion'];
        $electro = $_POST['electro'];
        $ergometria = $_POST['ergometria'];
        $rayosTorax = $_POST['rayosTorax'];
        
        $consulta = "INSERT INTO carrera1 (nro_de_Corredor, categoria, apellido, nombre, fechaDeInscripcion, electro, ergometria, rayos) VALUES ('$nro_de_Corredor', '$categoria','$apellido','$nombre','$fechaDeInscripcion','$electro','$ergometria','$rayosTorax')";

        $resultado = mysqli_query($conex,$consulta);

        if($resultado){
            ?>
            <h3 class="ok">Te has inscripto correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">Ha ocurrido un error!</h3>
            <?php
        }
        
    }
}*/



$nro_de_Corredor = $_POST['nro_de_Corredor'];
$categoria = $_POST['categoria'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$fechaDeInscripcion = $_POST['fechaDeInscripcion'];
$electro = $_POST['electro'];
$ergometria = $_POST['ergometria'];
$rayos = $_POST['rayos'];

$sql = "INSERT INTO carrera1 (nro_de_Corredor, categoria, apellido, nombre, fechaDeInscripcion, electro, ergometria, rayos) VALUES ('$nro_de_Corredor', '$categoria','$apellido','$nombre','$fechaDeInscripcion','$electro','$ergometria','$rayos')";

echo $sql;

$resultado = $conex->query($sql);

if ($resultado > 0) {
    echo 'REGISTRO AGREGADO';
} else {
    echo 'ERROR AL AGREGAR REGISTRO';
}

?>