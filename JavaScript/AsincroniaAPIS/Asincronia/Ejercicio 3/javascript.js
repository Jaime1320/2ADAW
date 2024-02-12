// Asigna un evento onclick a un botón. Cuando se hace clic en el botón, se ejecuta la función.
document.querySelector("button").onclick = function (e) {
    e.preventDefault(); // Evita que el botón realice su comportamiento predeterminado (por ejemplo, enviar un formulario).

    // URL de la API de la tienda falsa.
    const url = "https://fakestoreapi.com/products";

    // Realiza una solicitud GET a la API utilizando fetch.
    fetch(url)
        .then((respuesta) => {
            return respuesta.json(); // Convierte la respuesta a formato JSON.
        })
        .then((datos) => {
            // Itera sobre cada dato (producto) obtenido de la API.
            for (const dato of datos) {
                let entrada_datos = document.createElement("p");
                entrada_datos.textContent = dato.title;
                // Añade un evento 'mouseover' a cada título de producto.
                entrada_datos.addEventListener("mouseover", function () {
                    document.querySelectorAll("section")[1].innerHTML="";
                    let img = document.createElement("img");
                    img.setAttribute("src", dato.image);
                    document.querySelectorAll("section")[1].appendChild(img);
                });

                // Añade el elemento <p> (título del producto) al primer <section>.
                document.querySelector("section").appendChild(entrada_datos);
            }
        })
        .catch((respError) => {
            // Maneja cualquier error que ocurra durante la solicitud.
            alert("Problema con el fetch: " + respError);
        });
};


