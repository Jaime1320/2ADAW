function countBy() {
    let numX;
    let numY;
    numX = prompt("Dame un numero positivo");
    numY = prompt("Dame un numero positivo");
    if (isNaN(numX) || isNaN(numY)) {
        alert("no estas poniendo numeros validos");
    }
    parseInt(numX);
    parseInt(numY);
    let array = [];
    if (numX <= 0 || numY <= 0) {
        array = [];
    } else {
        for (i = 1; i <= numY; i++) {
            array.push(numX * i);
        }
    }
    console.log(array);
}

function ejercicio9() {
    let num;
    let array1 = [];
    let cont = 1;
   
    do {
        num = prompt("Dime un numero positivo mayor que dos");
        parseInt(num);
    } while (num <= 2 || isNaN(num));
    for (i = 0; i < num; i++) {
        array1[i] = []
        for(j=0;j< num;j++){
            array1[i][j] = num*cont;
            cont++;
        }
    }
    console.log(array1);
}
