var usuarios = []; //Arreglo vacio
//=====================================================================================================================

var centros = [
    { nombreCentro: "Ciudad Universitaria - CU" },
    { nombreCentro: "UNAH Valle de Sula" },
    { nombreCentro: "UNAH-TEC Danli" },
    { nombreCentro: "UNAH-TEC AGUÁN" },
    { nombreCentro: "UNAH-CURC" },
    { nombreCentro: "UNAH-CURLA" },
    { nombreCentro: "UNAH-CURLP" },
    { nombreCentro: "UNAH-CUROC" },
    { nombreCentro: "UNAH-CURNO" }
];

//Funcion con autoejecucion (Funcion anonima)
(function() {
    document.getElementById("centro").innerHTML = `<option value="centro">Seleccione el centro universitario</option>`;
    for (var i = 0; i < centros.length; i++) {
        document.getElementById("centro").innerHTML +=
            `<option value="${centros[i].nombreCentro}">${centros[i].nombreCentro}</option>`;
    }
})();

//=====================================================================================================================

var carreras = [
    { nombreCarrera: "Ingenieria en Sistemas" },
    { nombreCarrera: "Ingenieria Mecánica" },
    { nombreCarrera: "Ingenieria Civil" },
    { nombreCarrera: "Ingenieria Química" },
    { nombreCarrera: "Ingenieria Industrial" },
    { nombreCarrera: "Ingenieria Eléctrica" }
];

//Funcion con autoejecucion (Funcion anonima)
(function() {
    document.getElementById("carrera").innerHTML = `<option value="Carrera">Seleccione la carrera a estudiar</option>`;
    for (var i = 0; i < carreras.length; i++) {
        document.getElementById("carrera").innerHTML +=
            `<option value="${carreras[i].nombreCarrera}">${carreras[i].nombreCarrera}</option>`;
    }
})();

//========================================================VALIDACIONES=============================================================


function registrar() {
    validarCampoVacio("txt-nombre");
    validarCampoVacio("txt-apellido");
    validarCampoVacio("cuenta");
    validarCampoVacio("identidad");
    validarCampoVacio("mail");
    validarCampoVacio("contraseña");
    if (
        /* !validarCampoVacio(document.getElementById("txt-nombre")) &&
         !validarCampoVacio(document.getElementById("txt-apellido")) &&
         !validarCampoVacio(document.getElementById("cuenta")) &&
         !validarCampoVacio(document.getElementById("identidad")) &&
         !validarCampoVacio(document.getElementById("contraseña")) &&
         !validarCampoVacio(document.getElementById("mail")) */
        validarCampoVacio("txt-nombre") &&
        validarCampoVacio("txt-apellido") &&
        validarCampoVacio("cuenta") &&
        validarCampoVacio("identidad") &&
        validarCampoVacio("mail") &&
        validarCampoVacio("contraseña")

    ) {
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
/*
function validarCampoVacio(campo){
    if (campo.value==""){
        campo.classList.add("campo-invalido");      
        return false;
    }else{
        campo.classList.add("campo-valido");
    return true;
    }
}*/
/*
$("#carrera").change(function(){
    var Carrera = $("#carrera").val();

}); */