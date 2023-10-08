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
