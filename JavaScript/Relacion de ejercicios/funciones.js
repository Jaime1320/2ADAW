function sacarAlertDesdeFuncion() {
    alert("Este es un alert desde la funcion en un archivo a parte");
}

function saludar() {
    let nombre;
    nombre = prompt("Hola, ¿como te llamas?");
    alert("Bienveni@ a mi página " + nombre);
}

function pedirValores() {
    let num1;
    let num2;
    let suma;
    let resta;
    let multiplicacion;
    let division;
    let resto;
    num1 = prompt("Dime un numero");
    num2 = prompt("Dame otro numero");
    suma = alert("La suma es: " + (parseInt(num1) + parseInt(num2)));
    resta = alert("La resta es: " + (num1 - num2));
    multiplicacion = alert("La multiplicacion es: " + (num1 * num2));
    division = alert("La division es: " + (num1 / num2));
    resto = alert("El resto es: " + (num1 % num2));
}

function pedirUnNum() {
    let numN = 0;
    let cuadrado = 0;
    let res = 0;
    do {
        numN = prompt("Dime un numero entero mayor que 0");
    } while (numN <= 0 || isNaN(numN));

    for (i = 1; i <= parseInt(numN); i++) {
        if (parseInt(numN) % i == 0) {
            console.log("El numero: " + i + " es divisor de " + numN);
            cuadrado = i ** 2;
            console.log(i + " elevado a 2 es: " + cuadrado);
            res += cuadrado;
        }
    }
    console.log("La suma de los cuadrados es: " + res);
    if (res % 2 == 0) {
        alert(res + " es un cuadrado");
    } else {
        alert(res + " no es un cuadrado")
    }
}

function ejercicio7() {
    var arrayValores = [];
    var arrayFinal = [];
    var numero;
    do {
        numero = prompt("Introduzca numeros. Cuando haya acabado escriba *");
        if (numero != "*") {
            if (isNaN(numero)) {
                alert("Introduce valores por favor")
            }
            else {
                arrayValores.push(parseInt(numero));
            }

        }
    } while (numero != "*");

    for (i = 0; i < arrayValores.length; i++) {
        if (i == 0) {
            arrayFinal.push(arrayValores[i]);
        } else {
            arrayFinal.push(arrayFinal[i - 1] + arrayValores[i]);
        }
    }
    console.log("Para el array " + arrayValores + " , el array resultante sera : " + arrayFinal);

}

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
        for (j = 0; j < num; j++) {
            array1[i][j] = num * cont;
            cont++;
        }
    }
    console.log(array1);
}

function ejercicio10() {
    var array1 = [];
    var array2 = [];
    var arrayJunta = [];
    var arrayFinal = [];
    var numero;
    do {
        numero = prompt("Introduzca numeros. Cuando haya acabado escriba *");
        if (numero != "*") {
            if (isNaN(numero)) {
                alert("Introduce valores por favor")
            }
            else {
                array1.push(parseInt(numero));
            }

        }
        
    } while (numero != "*");
    console.log("Array 1: " + array1);
    do {
        numero = prompt("Introduzca numeros. Cuando haya acabado escriba *");
        if (numero != "*") {
            if (isNaN(numero)) {
                alert("Introduce valores por favor")
            }
            else {
                array2.push(parseInt(numero));
            }

        }
        
    } while (numero != "*");
    console.log("Array 2: " + array2);

    arrayJunta = array1.concat(array2);
    console.log("Este es el array junto: " + arrayJunta);

    let contador = 0;
    do {
        let repetido = false
        let numero = arrayJunta[contador];
        for (let i = arrayJunta.indexOf(numero) + 1; i < arrayJunta.length; i++) {
            if (numero == arrayJunta[i]) {
                repetido = true;
                break;
            }
        }
        if (!repetido){
            arrayFinal.push(numero);
        }
        contador++;
    } while (contador < arrayJunta.length);

    console.log(arrayFinal);
}




