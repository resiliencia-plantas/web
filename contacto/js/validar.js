function validar(){
    var nombre, correo, titulo, mensaje, expresion;
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;
    titulo = document.getElementById("titulo").value;
    mensaje = document.getElementById("mensaje").value;
    
    expresion = /\w+@\w+\.+[a-z]/;
    
    if(nombre ==="" || correo === "" || titulo==="" || mensaje===""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombre.length>30) {
        alert("El  nombre es muy largo");
        return false;
    }
    else if(correo.length>100) {
        alert("El  nombre es muy largo");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El correo no es válido");
        return false;
    }
    else if(titulo.length>300) {
        alert("El  titulo es muy largo");
        return false;
    }
    else if(mensaje.length>1000) {
        alert("El  mensaje es muy largo");
        return false;
    }
    else{
        Swal.fire({
            title: 'Gracias!',
            text: 'Tu mensaje fue enviado con Exito!',
            imageUrl: '../img/resiliencia.jpeg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image'
        });
    }
}