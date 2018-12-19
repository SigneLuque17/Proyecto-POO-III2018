$(document).ready(function(){
    console.log("Se ha cargado el DOM");
    
$.ajax({
    url:"ajax/matricula.php?accion=2", //opcion 2 para obtener asignaturas matriculadas

    method:"POST",
    dataType:"json",
    success:function(respuesta){
        console.log(respuesta);
        for (var i =0;i<respuesta.length;i++)
            $("#tabla").append(`
                <tr>
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
                    <td></td>
                    <td></td>
                </tr>`
            );
        },
        error:function(error){
			console.error(error);
			$("#tabla").append(error.responseText);
            
        }	
    
});
});
