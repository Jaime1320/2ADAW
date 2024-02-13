//Guardamos la URL
const url = "https://randomuser.me/api";

document.querySelectorAll("input")[0].addEventListener("click",function(){
    fetch(url)
        .then((respuesta) => {
            return respuesta.json();
        })
        .then((datos) => {
            //Convertimos los datos
            console.log(datos);
        })
        .catch((respError) => {
            alert("Problema con el fetch: "+respError)
        });
})

document.querySelectorAll("input")[1].addEventListener("click",function(){
    fetch(url)
        .then((respuesta) => {
            return respuesta.json();
        })
        .then((datos) => {
            datos.results.forEach(result => {
                //Creamos el article donde vamos a guardar los usuarios
                let articulo = document.createElement("article");
                //Le añadimos la clase usuarios
                articulo.setAttribute("class","usuario");
                //Creamos un p para cuardar el nombre
                let parra = document.createElement("p");
                //Metemos nombre,apellido y edad
                parra.textContent = result.name.first + " " + result.name.last + " " + result.dob.age;
                //Metemos el parra en el article
                articulo.appendChild(parra);
                //Creamos la imagen
                let imagen = document.createElement("img");
                //Le metemos en el src la ruta
                let ruta = result.picture.medium;
                imagen.setAttribute("src", ruta);
                //Metemos la imagen en el article
                articulo.appendChild(imagen);
                //Metemos el article en el div
                document.querySelector("div").appendChild(articulo);
            });
        })
        .catch((respError) => {
            alert("Problema con el fetch: "+respError)
        });
})