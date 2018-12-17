//obtener las facultades//
$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	$.ajax({
		url:"ajax/facultad.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			$("#select-c").append(`<option value="seleccionar">Seleccione la faculdad</option>`);
			
			for (var i =0;i<respuesta.length;i++){
                $("#select-c").append(`
                <option value="${respuesta[i].abreviatura}">${respuesta[i].Nombre}</option>`
				);
					
			}
		},
		error:function(error){
			console.error(error);
		}
	});
});

$("#select-c").change(function(){ 
	var facultad = $("#select-c").val();
	
	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.	
	$.ajax({
		url:"ajax/carreras.php?accion=1",			//la accion 1 es para obtener las carreras
		method:"GET",
		data: 'facultad='+facultad,
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			$("#select-b").append(`<option value="seleccionar">Seleccione la carrera</option>`);
			for (var i =0;i<respuesta.length;i++){
                $("#select-b").append(`
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
$("#select-b").change(function(){ 
	var carrera = $("#select-b").val();
	
	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.	
	$.ajax({
		url:"ajax/clases.php?accion=1",			//la accion 1 es para obtener las carreras
		method:"GET",
		data: 'carrera='+carrera,
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			$("#select-a").append(`<option value="seleccionar">Seleccione la carrera</option>`);
			for (var i =0;i<respuesta.length;i++){
                $("#select-a").append(`
                <option value="${respuesta[i].facultad}">${respuesta[i].clase}</option>`
			
				);
			}
		},
		error:function(error){
			console.error(error);
			$("#jefe").append(error.responseText);
		}
	});
});

