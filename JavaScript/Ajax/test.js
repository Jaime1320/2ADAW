document.addEventListener("DOMContentLoaded", () => {
    document.querySelector("input").onclick = function (e) {
    e.preventDefault();

    const ruta = "http://localhost/JavaScript/Ajax/consulta.php";

    //PASO 1 - Creao el objeto
    xhr = new XMLHttpRequest();

    //PASO 2 - Hago la peticion
    xhr.open("POST", ruta);

    let formu = document.querySelector("form");

    // FORMA 1 algunos campos
    let nicoFD = new FormData();
    nicoFD.append("nombre", "Don Nicolas");
    nicoFD.append("dni", "1111111N");
    nicoFD.append("apel", "Padre de Familia");
    nicoFD.append("edad", 13);

     // FORMA 2 Todos los campos del formulario
    // let nicoFD = new FormData(formu);
    // console.log(nicoFD);

    //PASO 3
    xhr.addEventListener("load", function (respuesta) {
        console.log("Todo OK");
        let resultado = JSON.parse(respuesta.target.response);
        console.log(resultado);
    });
    xhr.addEventListener("error", function (respuesta) {
        console.log("Todo Mal");
        let resultado = JSON.parse(respuesta.target.response);
        console.log(resultado);
    });

    //PASO 5
    xhr.send(nicoFD);
 
  };
});
