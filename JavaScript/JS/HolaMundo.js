//para llamar a quokka ctrl+shift+p
//nombre = "Jaime";
//console.log(nombre);
var nombre = 'Jaime';//definir variables del tipo string
let a = 2;//definir variables del tipo numerico
let b = '3';
let ok = true;
let hora = 13;

console.log(typeof nombre);//para ver que tipo de variable es
console.log(typeof a);
console.log(typeof ok);

console.log(a + nombre);//para concatenar

let simbolo = Symbol("mi simbolo");
console.log(typeof simbolo);

//Estructura if
if (a >= 18) {
    console.log("persona adulta");
} else {
    console.log("persona no adulta");
}

//Estructura else if
if (hora <= 12) {
    console.log("Buenos dias son las " + hora);
} else if (hora < 21) {
    console.log("buenas tardes, son las " + hora);
} else {
    console.log("buenas noches son las " + hora);
}

if (a % 2 == 0) {
    console.log("el numero " + a + " es par");
} else {
    console.log("el numero " + a + " es impar");
}

let resultado = (3 < 2) ? "verdadero" : "falso";
console.log(resultado);

let x = '2';
let minumero = "18";
if (isNaN(x)) {
    console.log(minumero);
}

//Estructura while

let contador = 0;
while (contador < 3) {
    console.log(contador);
    contador++;
}

//Estructura do while
let cont = 0;
do {
    console.log(cont);
    cont++;
} while (cont < 4);

//Estructura for
for (cont = 0; cont < 3; cont++) {
    console.log(cont);
}

//Pre-Incremento
z = ++a;
console.log(a);
console.log(z);

//Post-Incremento
z = b++;
console.log(b);
console.log(z);

//Pre-Decremento
z = --a;
console.log(a);
console.log(z);

//Post-Decremento
z = b--;
console.log(b);
console.log(z);

let c = 1;
c += 3;
console.log(c);

c -= 2;
console.log(c);

//Estructura switch
let mes = 2;
let estacion = "desconocida";

switch (mes) {
    case 1:
    case 2:
    case 3:
    case 4:
        estacion = "primavera";
        break;
    case 5:
    case 6:
    case 7:
    case 8:
        estacion = "verano"
        break;
    case 9:
    case 10:
    case 11:
        estacion = "otoño";
    case 12:
        estacion = "invierno";
    default:
        console.log("no existe ese mes");
}
console.log("La estacion es " + estacion)

for(let conta = 0;conta<=10;conta++){
    if(conta % 2 !==0){
        console.log(conta);
        break;
    }
}


let objeto ={
    nombre:"Jaime",
    apellido: "Hermana"
}

//Definimos una clase
class Persona{
    constructor(nombre, apellido){
        this.nombre = nombre;
        this.apellido = apellido;
    }
}
console.log(Persona);
console.log(typeof Persona);

//Array
let marcaCoches = ["BMW","AUDI","RENAULT","FORD"]
console.log(typeof marcaCoches)

//tipo de dato function 
xx = 9;
yy = 10;

function miFuncion(xx,yy){
    console.log("Suma: " + (xx + yy));
}
miFuncion(xx,yy);

console.log(typeof miFuncion);

function Saludar(){
    console.log("Saludos desde la funcion");
}
//?FUNCION RANDOM?//

function random(min, max) {
    return parseInt(Math.random() * (max - min + 1) + min);
}












