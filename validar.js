
function validar(){
    
    var nroCorredor = document.getElementById("nro_de_corredor").value;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var fechaDeInscripcion = document.getElementById("fecha_de-inscripcion").value;

    var expresion = /\w+[a-z]/; 

    if(nroCorredor === "" || nombre === "" || apellido === "" || fechaDeInscripcion === ""){
        alert ("Todos los campos son obligatorios");
        return false;
    }

    else if(nombre.length>30){
        alert("El nombre es muy largo");
        return false;
    }

    else if(apellido.length>30){
        alert("El apellido es muy largo");
        return false;
    }
    
    else if(isNaN(nroCorredor)){
        alert("El número ingresado no es correcto");
        return false;
    }
    
    if(nroCorredor<100 || nroCorredor>1000){
        alert("Ingrese un número entre 100 y 1000");
        return false;
    }
    
    var formulario = document.getElementById("electro" && "ergonometria" && "rayosTorax").checked;
    if(formulario === false){
        alert("Se deben tildar todos los estudios requeridos");
        return false;
    }

}

function soloLetras(e) {
    var key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
      especiales = [8, 37, 38, 46, 164];
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }
