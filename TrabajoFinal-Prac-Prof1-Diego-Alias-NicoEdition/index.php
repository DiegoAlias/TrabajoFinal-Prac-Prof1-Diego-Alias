<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación Final Práctica Profesionalizante I</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="validar.js"></script>
</head>

<body style="background-image: url(Imagenes/aconcagua\ 1.jpg); background-size: cover;">
    <div class="content  text-center "  style= "color:white;  ">
    <div class="row text-center m-10 opacity-40" style= "color:black;  ">
    <div class="col opacity-40">
        <div class = "card opacity-60 " style = "margin-left: 20%; margin-right: 20%; margin-top: 3%;" id="titulo">
            <div class = "card-header card-title h1"> First Coup of Running – Aconcagua 2020</div>
            <div class="card-subtitle mb-2 mt-2 text-muted h3">Mendoza - Argentina
            <br>Ficha de inscripción</br></div>   
        </div>
        </div>
    </div>
    <div class="row" style = "margin-left: 30%; margin-right: 30%; margin-top: 3%;" >
        <div class="col">
            
                <button type="button" class="btn btn-primary btn-lg  m-1">Consultar</button>
                <button type="button" class="btn btn-primary btn-lg m-1">Eliminar</button>
            
        </div>
    </div>

    <div class="cuerpo" id="cat">
        <form method="POST" action="guardar.php">
        <div class = "row" style = "margin-left: 38%; margin-right: 38%; margin-top: 2%; margin-bottom: 2%;">        
            <label id="cat" required>Categoría:
                <select size="4" class="form-select mb-3" id="categoria" name="categoria" required>
                    <option value="Junior Masculino">Junior Masculino</option>
                    <option value="Junior Femenina">Junior Femenina</option>
                    <option value="Promesa Masculino">Promesa Masculino</option>
                    <option value="Promesa Femenina">Promesa Femenina</option>
                    <option value="Senior Masculino">Senior Masculino</option>
                    <option value="Senior Femenina">Senior Femenina</option>
                    <option value="Veterano 35 - Masculino">Veterano 35 - Masculino</option>
                    <option value="Veterano 35 - Femenina">Veterano 35 - Femenina</option>
                </select>
            </label>
        </div>
        <div class = "row" style = "margin-left: 5%; margin-right: 5%; margin-top: 2%; margin-bottom: 2%;">
            <div class="col">
                <section id="seccion">
                    
                    Nro de Corredor: <input style="margin-right: 1%;" type="number" id="nro_de_Corredor" name="nro_de_Corredor" placeholder="Nro de corredor" autofocus required>

                    Apellido: <input style="margin-right: 1%;" type="text" id="apellido" name="apellido" placeholder="Apellido" onkeypress="return soloLetras(event)" onpaste="return false" required>

                    Nombre: <input style="margin-right: 1%;" type="text" id="nombre" name="nombre" placeholder="Nombre" onkeypress="return soloLetras(event)" onpaste="return false" required>

                    Fecha de inscripción: <input style="margin-right: 1%;" type="date" id="fecha_de_inscripcion" name="fechaDeInscripcion" placeholder="Fecha de inscripción" required>
                </section>
            </div>
        </div>    

        <div class = "row" style = "margin-left: 5%; margin-right: 5%; margin-top: 2%; margin-bottom: 2%;">
            <div class="col">
            <div id="tildes">
                <div class = "form-check form-check-inline">
                    <input class = "form-check-input " type="checkbox" style="margin-right: 1%;" id="electro" name="electro" value="1" required> <label class="form-check-label" for="inlineCheckbox1">Electro</label>
                </div>    
                <div class = "form-check form-check-inline">
                    <input class="form-check-input " type="checkbox" style="margin-right: 1%;" id="ergonometria" name="ergometria" value="1" required> <label class="form-check-label" for="inlineCheckbox1">Ergometria </label>
                </div>
                <div class = "form-check form-check-inline">
                    <input class="form-check-input " type="checkbox" style="margin-right: 1%;" id="rayosTorax" name="rayos" value="1" required> <label class="form-check-label" for="inlineCheckbox1">Rayos Torax </label>
                </div>
            </div>
            </div>
        </div>

            <div class = "row" style = "margin-left: 40%; margin-right: 40%; margin-top: 2%; margin-bottom: 2%;" id="boton2">
                <div class="col">
                    <!-- <input type="submit" value="ENVIAR"> -->
                    <!-- <input type="reset" id="limpiar" value="BORRAR"> -->
                    <button class="btn btn-primary form-control m-1" id="enviar" name="enviar" type="submit">ENVIAR</button>
                    <button class="btn btn-primary form-control m-1" id="borrar" name="borrar" type="reset">BORRAR</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



</body>

</html>