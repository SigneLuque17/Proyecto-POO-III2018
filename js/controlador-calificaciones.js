$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	$.ajax({
		url:"ajax/calificaciones.php?accion=1",
        method:"GET",
        data:"numDocente="+$("#txt-empleado").val(),
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			$("#sl-clases").append(`<option value="seleccionar">Seleccione la asignatura</option>`);
			for (var i =0;i<respuesta.length;i++){
                $("#sl-clases").append(`
                <option value="${respuesta[i].seccion}">${respuesta[i].codCarrera}-${respuesta[i].codClase} ${respuesta[i].seccion}</option>`
				);
			}
		},
		error:function(error){
			console.error(error);
		}
    });
});


//====================================================obtener alumnos de secciones=================================================================
$("#sl-clases").change(function(){
    var seccion = $("#sl-clases").val();
    var numDocente = $("#txt-empleado").val();
	
	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.	
	$.ajax({
		url:"ajax/calificaciones.php?accion=2",			//la accion 1 es para obtener las carreras
		method:"GET",
        data: 'seccion='+seccion+"&"+
              'numDocente='+numDocente,
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
			for (var i =0;i<respuesta.length;i++){
                $("#alumnos").append(`
                <option value="${respuesta[i].cuenta}">${respuesta[i].alumno} ${respuesta[i].apellido}</option>`
				);
			}
		},
		error:function(error){
			console.error(error);
			$("#jefe").append(error.responseText);
		}
	});
});

//====================================================guardar notas=================================================================
$("#btn-guardar").click(function(){
    var parametros ="seccion="+$("#sl-clases").val()+"&"+
                    "cuenta="+$("#alumnos").val()+"&"+
					"nota="+$("#txt-nota").val()+"&"+
					"estado="+$("input[name='estado']:checked").val();
			
			console.log(parametros);		
			$("#btn-guardar").attr("disabled",true);
			
			$.ajax({
				url:"ajax/calificaciones.php?accion=3",  //accion 1 para matricular clases en el archivo Seccion
				data:parametros,
				method:"POST",
				dataType:"json",
				success:function(respuesta){
					console.log(respuesta);						
					//anadir mensaje con modal show					
					}	
				
			});

});