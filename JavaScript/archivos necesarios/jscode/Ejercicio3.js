const url = "http://www.jaimeweb.es/medac/getProfesores.php";
document.querySelectorAll("input")[0].addEventListener("click", function () {
    let midiv = document.querySelector("div");
    while (midiv.firstChild) {
        midiv.removeChild(midiv.firstChild);
    }
    fetch(url)
        .then((respuesta) => {
            return respuesta.json();
        })
        .then((datos) => {
            console.log(datos);
            let div = document.querySelector("div");
            datos.forEach(element => {
                let parran = document.createElement("p");
                let parrad = document.createElement("p");
                let midiv = document.createElement("div");
                parran.textContent = element.nombre;
                parrad.textContent = element.dni;
                midiv.setAttribute("class", "ficha");
                midiv.appendChild(parran);
                midiv.appendChild(parrad);
                div.appendChild(midiv);
            });
        })
        .catch((respError) => {
            alert("Problema con el fetch: " + respError)
        });
})

