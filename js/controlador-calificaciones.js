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