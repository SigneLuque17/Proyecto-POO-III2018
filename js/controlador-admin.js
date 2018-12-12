//obtener las facultades//
$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	$.ajax({
		url:"ajax/facultad.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
            console.log(respuesta);
            $("#facultad-asignada").append(`<option value="seleccionar">Seleccione la faculdad</option>`);
			for (var i =0;i<respuesta.length;i++)
                $("#facultad-asignada").append(`
                <option value="${respuesta[i].abreviatura}">${respuesta[i].Nombre}</option>`
                );
		},
		error:function(error){
			console.error(error);
		}
	});
});
//**************************************************** */