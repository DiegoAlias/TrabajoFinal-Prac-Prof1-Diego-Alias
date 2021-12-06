<?php

require("conexion.php");

/*if($conex){
    echo"todo ok";
}*/

        $categoria = $_POST['categoria'];
        $nro_de_Corredor = $_POST['nro_de_Corredor'];
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $fechaDeInscripcion = $_POST['fechaDeInscripcion'];
        $electro = $_POST['electro'];
        $ergometria = $_POST['ergometria'];
        $rayosTorax = $_POST['rayos'];
        
        $sql = "INSERT INTO carrera (categoria, nro_Corredor, apellido, nombre, fecha, electro, ergo, rayos, operador) VALUES ('$categoria', '$nro_de_Corredor','$apellido','$nombre','$fechaDeInscripcion','$electro','$ergometria','$rayosTorax', '')";
    
        
    
         //echo $sql;
             
        $resultado = $conex->query($sql);
        //echo 'resultado' . $resultado;

        if ($resultado == 1) {
            echo 'REGISTRO AGREGADO CORRECTAMENTE';
        } else {
            echo 'ERROR AL AGREGAR REGISTRO';
        }
        

?>