const ruta = "https://dog.ceo/api/breeds/image/random";

document.querySelector("input").addEventListener("click", function(){

    let xhr = new XMLHttpRequest();

    xhr.open('GET', ruta);

        xhr.addEventListener('load', function(data){

            let imagen = document.createElement("img");
            let respuesta = JSON.parse(data.target.response);
            imagen.setAttribute("src" , respuesta.message);
            imagen.setAttribute("width","200px");
            imagen.setAttribute("height","200px")
            document.querySelector("div").appendChild(imagen);

        });
        xhr.send();
})
