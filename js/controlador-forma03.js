$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	
////////////////////////////////////////////VISUALIZAR MATRICULA //////////////////////////////////////////////////////
	var parametro  = "cuenta="+$("#txt-cuenta").val()+"&"
					+"carrera="+$("#txt-carrera").val()+"&"
					+"facultad="+$("#txt-facultad").val();
		console.log(parametro);
        $.ajax({
		url:"ajax/matricula.php?accion=2", //opcion 2 para obtener asignaturas matriculadas
		method:"GET",
		data:parametro,
		dataType:"json",
		
		success:function(respuesta){
			console.log(respuesta);

				for (var i =0;i<respuesta.length;i++){
					$("#clases-matriculadas").append(
						`<tr>
							<td>${respuesta[i].codCarrera}${respuesta[i].codClase}</td>
                            <td>${respuesta[i].clase}</td>
                            <td>${respuesta[i].seccion}</td>						
							<td>${respuesta[i].inicio}</td>
							<td>${respuesta[i].final}</td>
                            <td>${respuesta[i].dias}</td>
                            <td>${respuesta[i].edificio}</td>
                            <td>${respuesta[i].aula}</td>
							<td>${respuesta[i].uv}</td>
							<td>3</td>
						</tr>`
					);
				}
				
			}	
		
	});

});
