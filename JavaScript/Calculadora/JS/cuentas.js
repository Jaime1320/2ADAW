function Sumar() {
    comprobar = true;

    do {
        let a = prompt("Dime un numero A: ");
        let b = prompt("Dime un numero B");
        if (isNaN(a) || isNaN(b)) {

            alert("No estas poniendo numeros");
            comprobar = false;
        } else {
            a = Number(a);
            b = Number(b);

            document.getElementById("resultado").innerHTML = "La suma de " + a + " + " + b  + " es: " + (a + b);
            comprobar = true;
        }
    } while (comprobar == false);
}

function Restar() {

    comprobar = true;
    do {
        let a = prompt("Dime un numero A: ");
        let b = prompt("Dime un numero B");
        if (isNaN(a) || isNaN(b)) {

            alert("No estas poniendo numeros");
            comprobar = false;
        } else {
            a = Number(a);
            b = Number(b);
            comprobar = true;

            document.getElementById("resultado").innerHTML = "La resta de " + a + " - " + b  + " es: " + (a - b);
        }
    } while (comprobar == false);
}
function Multiplicar() {
    let comprobar = true;
    do {
        let a = prompt("Dime un numero A: ");
        let b = prompt("Dime un numero B");
        if (isNaN(a) || isNaN(b)) {
            comprobar = false;
            alert("No estas poniendo numeros");
        } else {
            a = Number(a);
            b = Number(b);
            comprobar = true;

            document.getElementById("resultado").innerHTML = "La multiplicacion  de " + a + " * " + b  + " es: " + (a * b);
        }
    } while (comprobar == false)

}
function Division() {
    let comprobar = true;
    do {
        let a = prompt("Dime un numero A: ");
        let b = prompt("Dime un numero B");
        if (isNaN(a) || isNaN(b)) {
            comprobar = false;
            alert("No estas poniendo numeros");
        } else {
            a = Number(a);
            b = Number(b);
            comprobar = true;
        
            document.getElementById("resultado").innerHTML = "La división de " + a + " / " + b  + " es: " + (a / b);
        }
    } while (comprobar == false)

}
function Potencia() {
    let comprobar = true;
    do {
        let a = prompt("Dime un numero A: ");
        let b = prompt("Dime un numero B");
        if (isNaN(a) || isNaN(b)) {
            comprobar = false;
            alert("No estas poniendo numeros");

        } else {
            a = Number(a);
            b = Number(b);
            comprobar = true;
           
            document.getElementById("resultado").innerHTML = "La potencia de " + a + " ^ " + b  + " es: " + (a ** b);
        }
    } while (comprobar == false)

}
function Modulo() {
    let comprobar = true;
    do {
        let a = prompt("Dime un numero A: ");
        let b = prompt("Dime un numero B");
        if (isNaN(a) || isNaN(b)) {
            comprobar = false;
            alert("No estas poniendo numeros");

        } else {
            a = Number(a);
            b = Number(b);
            comprobar = true
           
            document.getElementById("resultado").innerHTML = "El modulo de " + a + " % " + b  + " es: " + (a % b);
        }
    } while (comprobar == false)

}
function Incremento() {
    let comprobar = true;
    do {
        let a = prompt("Dime un numero A: ");
        if (isNaN(a)) {
            comprobar = false;
            alert("No estas poniendo un numero");

        } else {
            a = Number(a);
            comprobar = true;
           
            document.getElementById("resultado").innerHTML = "El incremento de " + a +  " es: " + (++a);
        }
    } while (comprobar == false)

}
function Decremento() {
    let comprobar = true;
    do {
        let a = prompt("Dime un numero A: ");
        if (isNaN(a)) {
            comprobar = false;
            alert("No estas poniendo un numero");
            
        } else {
            a = Number(a);
            comprobar = true;
           
            document.getElementById("resultado").innerHTML = "El decremento de " + a +  " es: " + (--a);
        }
    }while(comprobar == false)
    
}