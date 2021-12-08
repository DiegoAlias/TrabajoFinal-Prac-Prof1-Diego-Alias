<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center mt-5 ">
        <div class="row text-center">
            <div class="card">
                <div class="card-header">
                <label class="h4 mt-2">
                    <!-- <script language=”php”> -->
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

                </label>
                </div>
                <div class="card-body">
                    <a href="#" type="button" class="btn btn-primary btn-sm w-40">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>