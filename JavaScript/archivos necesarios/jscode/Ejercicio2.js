const url = "http://www.jaimeweb.es/medac/datos.json";

document.querySelector("input").addEventListener("click",function(){
    fetch(url)
        .then((respuesta) => {
            return respuesta.json();
        })
        .then((datos) => {
            //Recorremos todos los objetos
            for(dato of datos){
                console.log(dato);
            }
            //Sacamos los datos por consola
            datos.forEach(element => {
                console.log(element.id);
                console.log(element.nombre);
                console.log(element.email);
                console.log(element.estado);
            });
        })
        .catch((respError) => {
            alert("Problema con el fetch: "+respError)
        });
})