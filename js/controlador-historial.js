$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	
////////////////////////////////////////////VISUALIZAR MATRICULA //////////////////////////////////////////////////////
        $.ajax({
		url:"ajax/historial.php", //opcion 2 para obtener asignaturas matriculadas
		method:"GET",
		data:"cuenta="+$("#txt-cuenta").val(),
		dataType:"json",
		
		success:function(respuesta){
			console.log(respuesta);

				for (var i =0;i<respuesta.length;i++){
					$("#historial").append(
						`<tr>
							<td>${respuesta[i].codCarrera}${respuesta[i].codClase}</td>
                            <td>${respuesta[i].clase}</td>
                            <td>${respuesta[i].uv}</td>
                            <td>${respuesta[i].seccion}</td>						
							<td>${respuesta[i].año}</td>
							<td>${respuesta[i].periodo}</td>
                            <td>${respuesta[i].nota}</td>
                            <td>${respuesta[i].estado}</td>
						</tr>`
					);
				}
				
			}	
		
	});

});
