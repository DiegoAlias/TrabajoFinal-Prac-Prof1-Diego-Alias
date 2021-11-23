<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación Final Práctica Profesionalizante I</title>
    <link rel="stylesheet" href="style.css">

    <script src="validar.js"></script>
</head>

<body>
    <header id="titulo">
        <h1>First Coup of Running – Aconcagua 2020</h1>
        <h2>Mendoza - Argentina</h2>
        <h3>Ficha de inscripción</h3>
    </header>

    <div id="boton1">
        <a href="#">Consultar</a>
        <a href="#">Eliminar</a>
    </div>

    <div class="cuerpo" id="cat" method="POST" action="guardar.php">
        <label id="categoria" required>Categoría:
            <select size="3" class="ApeyNombre" id="categoria" name="categoria">
                <option value="1">Junior Masculino</option>
                <option value="2">Junior Femenina</option>
                <option value="3">Promesa Masculino</option>
                <option value="4">Promesa Femenina</option>
                <option value="5">Senior Masculino</option>
                <option value="6">Senior Femenina</option>
                <option value="7">Veterano 35 - Masculino</option>
                <option value="8">Veterano 35 - Femenina</option>
            </select>
        </label>


        <section id="seccion">
            <form method="POST">
                Nro de Corredor: <input type="number" id="nro_de_Corredor" name="nro_de_Corredor" placeholder="Nro de corredor" autofocus required>

                Apellido: <input type="text" id="apellido" name="apellido" placeholder="Apellido" onkeypress="return soloLetras(event)" onpaste="return false" required>

                Nombre: <input type="text" id="nombre" name="nombre" placeholder="Nombre" onkeypress="return soloLetras(event)" onpaste="return false" required>

                Fecha de inscripción: <input type="date" id="fecha_de_inscripcion" name="fechaDeInscripcion" placeholder="Fecha de inscripción" required>
        </section>

        <div id="tildes">
            <input type="checkbox" id="electro" name="electro" required> Electro

            <input type="checkbox" id="ergonometria" name="ergometria" required> Ergometria

            <input type="checkbox" id="rayosTorax" name="rayos" required> Rayos Torax
        </div>


        <div id="boton2">
            <!-- <input type="submit" value="ENVIAR"> -->
            <!-- <input type="reset" id="limpiar" value="BORRAR"> -->
            <button class="form-control" id="enviar" name="enviar" type="submit">ENVIAR</button>
            <button class="form-control" id="borrar" name="borrar" type="reset">BORRAR</button>
        </div>
        </form>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php

    include("guardar.php")
    ?>

</body>

</html>