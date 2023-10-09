function calcular() {
    let elem = document.getElementById("resultado");
    let array = [1, 2, 3, 4, 5, 6];
    let suma = 0;
    let arraySuma = [];
    array.forEach(function (elemento, indice, array) {
        suma += elemento;
        arraySuma.push(suma);
    });
    elem.innerHTML = arraySuma;
}

function countBy() {
    let numx = prompt("Dame un numero");
    let numy = prompt("Dame otro numero");
    let array = [];
    if ((numx || numy) < 0) {
        array = [];
        return  document.getElementById("resultados").innerHTML = array;
    }
    for (i = 1; i <= numy; i++) {
        array.push(i * numx);
    }
    document.getElementById("resultados").innerHTML = array;
}
