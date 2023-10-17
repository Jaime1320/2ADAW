let tabla = document.getElementsByClassName("victor")[0];
function altAnch() {
    let altura = parseInt(prompt("Dame la altura"));
    let anchura = parseInt(prompt("Dame la anchura"));
    tabla.setAttribute("height" , altura);
    tabla.setAttribute("width" , anchura);
}
function aniadir() {
    let altura = parseInt(tabla.getAttribute("width"));
    let anchura = parseInt(tabla.getAttribute("height"));
    let alturaAct = parseInt(prompt("Dame la altura"));
    let anchuraAct = parseInt(prompt("Dame la anchura"));
    tabla.setAttribute("height" , (altura + alturaAct));
    tabla.setAttribute("width" , (anchura + anchuraAct));
}

function cambiarBorde(){
    let bordeNew = parseInt(prompt("Dame un borde"));
    tabla.setAttribute("border" , bordeNew);
}
function cambiarAlineacion(){
    let posicion = tabla.getAttribute("align");
    console.log(posicion)
    if(posicion == "left"){
        tabla.setAttribute("align" , "center");
    }else if(posicion == "center"){
        tabla.setAttribute("align" , "right");
    }
    else{
        tabla.setAttribute("align" , "left");
    }
}