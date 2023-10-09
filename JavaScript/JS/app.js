function Sumar(){
    let comprobar = true;
    
    let a = prompt("Dime un numero A: ");
    let b = prompt("Dime un numero B");
    if(isNaN(a)||isNaN(b)){
        comprobar = false; 
        alert("No estas poniendo numeros");
        let a = prompt("Dime un numero A: ");
        let b = prompt("Dime un numero B");
    }else{
        a = Number(a);
        b = Number(b);

        alert("La suma es: " + (a+b));
    }
    
}

const persona = {
    nombre: 'Jaime',
    apellido: 'Hermana'
}

function cambiarValorObjeto(p1){
    p1.nombre ='Jesulin';
    p1.apellido = 'Marquez';
}

function miConcatenador(separator){
    var result = "";
    var i;
    for(i = 1; i<arguments.length; i++){
        result +=arguments[i] + separator;
    }
    console.log(result);
    return result;
}
miConcatenador(",","red", "orange", "blue");


