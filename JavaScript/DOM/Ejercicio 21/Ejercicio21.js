let enlace = document.querySelector("a");


enlace.addEventListener("mouseover", function (){
    crearDiv();
})
enlace.addEventListener("mouseleave", function(){
    eliminarDiv();
})


function crearDiv(){
    let nuevodiv = document.createElement('div');
    nuevodiv.className = "clase1";
    let textodiv = document.createTextNode("Esto es un enlace");
    nuevodiv.appendChild(textodiv);
    document.body.appendChild(nuevodiv);
    console.log("hola");
}
function eliminarDiv(){
    document.body.removeChild(document.querySelector("div"));
}