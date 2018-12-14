//============================================obtener facultades====================================================================
$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	$.ajax({
		url:"ajax/facultad.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
            $("#facultad").append(`<option value="seleccionar">Seleccione la faculdad</option>`);
			for (var i =0;i<respuesta.length;i++)
                $("#facultad").append(`
                <option value="${respuesta[i].abreviatura}">${respuesta[i].Nombre}</option>`
                );
		},
		error:function(error){
			console.error(error);
		}
	});
});

//============================================obtener centros=========================================================================
$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	$.ajax({
		url:"ajax/centros.php?accion=1",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			$("#centro").append(`<option value="seleccionar">Seleccione el centro</option>`);
			for (var i =0;i<respuesta.length;i++){
                $("#centro").append(`
                <option value="${respuesta[i].centro}">${respuesta[i].centro}</option>`
				);	
			}
		},
		error:function(error){
			console.error(error);
		}
	});
});

//====================================================obtener carreras=================================================================
$("#facultad").change(function(){
	var facultad = $("#facultad").val();
	
	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.	
	$.ajax({
		url:"ajax/carreras.php?accion=1",			//la accion 1 es para obtener las carreras
		method:"GET",
		data: 'facultad='+facultad,
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			$("#carrera").append(`<option value="seleccionar">Seleccione la carrera</option>`);
			for (var i =0;i<respuesta.length;i++){
                $("#carrera").append(`
                <option value="${respuesta[i].codigo}">${respuesta[i].carrera}</option>`
				);
			}
		},
		error:function(error){
			console.error(error);
			$("#jefe").append(error.responseText);
		}
	});
});
//========================================================VALIDACIONES=============================================================
function registrar() {
    validarCampoVacio("txt-nombre");
    validarCampoVacio("txt-apellido");
    validarCampoVacio("cuenta");
    validarCampoVacio("identidad");
    validarCampoVacio("mail");
    validarCampoVacio("contraseña");
    if (
        
        validarCampoVacio("txt-nombre") &&
        validarCampoVacio("txt-apellido") &&
        validarCampoVacio("cuenta") &&
        validarCampoVacio("identidad") &&
        validarCampoVacio("mail") &&
        validarCampoVacio("contraseña")

    ) {
//====================================guardar alumnos=========================================
var usuarios = []; //Arreglo vacio
    var usuario = {
            nombre: document.getElementById("txt-nombre").value,
            apellido: document.getElementById("txt-apellido").value,
            numCuenta: document.getElementById("cuenta").value,
            numId: document.getElementById("identidad").value,
            password: document.getElementById("contraseña").value,
            correo: document.getElementById("mail").value,
            carrera: document.getElementById("carrera").value,
            centro: document.getElementById("centro").value
        };
        usuarios.push(usuario); //Agregando un nuevo objeto usuario
        console.log(usuarios);


        document.getElementById("informacion").innerHTML +=
            `
                    <p><b> INFORMACION DEL ESTUDIANTE </b></p>             
                       <p>${usuario.nombre} ${usuario.apellido}</p>
                       <p>Su numero de cuenta es ${usuario.numCuenta}  </p>
                       <p>Su numero de identidad es ${usuario.numId}</p>
                       <p>Estudia ${usuario.carrera} </p>
                       <p>Estudia en ${usuario.centro}</p>
                       <p>Su direccion de correo electronico es ${usuario.correo}</p>
                    `;
    }
}
/////////////////////////////////////////////////////////////////////////////////////////////

function validarCampoVacio(id) {
    if (document.getElementById(id).value == "") {
        document.getElementById(id).classList.remove("campo-valido");
        document.getElementById(id).classList.add("campo-invalido");
        return false;
    } else {
        document.getElementById(id).classList.remove("campo-invalido");
        document.getElementById(id).classList.add("campo-valido");
        return true;
    }
}