/*
    al pulsarlo se inicie una carrera entre los 4 divs.
    los divs se moverán hacia la derecha hasta que el primero de ellos llegue al borde derecho de la pantalla.
*/

let posiciones = [0, 0, 0, 0];
let intervalo;

document.querySelectorAll("button")[0].addEventListener("click", function () {
    intervalo = setInterval(correr, 10);
    this.disabled = true;

    function correr() {

        posiciones[0] += random(0, 10);
        posiciones[1] += random(0, 10);
        posiciones[2] += random(0, 10);
        posiciones[3] += random(0, 10);

        document.querySelectorAll("div")[0].style.setProperty("transform", `translateX(${posiciones[0]}px)`);
        document.querySelectorAll("div")[1].style.setProperty("transform", `translateX(${posiciones[1]}px)`);
        document.querySelectorAll("div")[2].style.setProperty("transform", `translateX(${posiciones[2]}px)`);
        document.querySelectorAll("div")[3].style.setProperty("transform", `translateX(${posiciones[3]}px)`);
        console.log("corriendo");
        if (posiciones[0] >= document.body.offsetWidth - 100) {
            clearInterval(intervalo);
            console.log("fin");
        } else if (posiciones[1] >= document.body.offsetWidth - 100) {
            clearInterval(intervalo);
            console.log("fin");
        } else if (posiciones[2] >= document.body.offsetWidth - 100) {
            clearInterval(intervalo);
            console.log("fin");
        } else if (posiciones[3] >= document.body.offsetWidth - 100) {
            clearInterval(intervalo);
            console.log("fin");
        }
    }
});


function random(min, max) {
    return parseInt(Math.random() * (max - min + 1)) + min;
}
document.querySelectorAll("button")[1].addEventListener("click", function(){
    document.querySelectorAll("button")[0].disabled=false;
  posiciones = [0, 0, 0, 0];
  document
    .querySelectorAll("div")[0]
    .style.setProperty("transform", `translateX(${posiciones[0]}px)`);
  document
    .querySelectorAll("div")[1]
    .style.setProperty("transform", `translateX(${posiciones[1]}px)`);
  document
    .querySelectorAll("div")[2]
    .style.setProperty("transform", `translateX(${posiciones[2]}px)`);
  document
    .querySelectorAll("div")[3]
    .style.setProperty("transform", `translateX(${posiciones[3]}px)`);

  clearInterval(intervalo);
});



