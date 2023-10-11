function random(min, max) {
    return parseInt(Math.random() * (max - min + 1) + min);
}

function ejercicio1(){
    let gramos = 0;
    let kilogramos = 0;
    do {
        gramos = prompt("Dime un numero de gramos");
        if (isNaN(gramos)) {
            alert("Introduce un numero por favor");
        }else if(parseInt(gramos)<=0){
            alert("El numero debe ser mayo que 0");
        }
        kilogramos = gramos/1000;
    } while (gramos <= 0 || isNaN(gramos));
    alert(gramos + " gramos son " + kilogramos + " kilogramos");
}

function ejercicio2(){
    let contador = 0;
    let media
    let num1 = prompt("Dame un numero");
    let num2 = prompt("Dame un numero");
    let num3 = prompt("Dame un numero");
    let num4 = prompt("Dame un numero");
    let num5 = prompt("Dame un numero");
    let num6 = prompt("Dame un numero");
    let num7 = prompt("Dame un numero");
    let num8 = prompt("Dame un numero");
    let num9 = prompt("Dame un numero");
    let num10 = prompt("Dame un numero");

}

function ejercicio3(){
    let numero;
    let array1 = [];
    let res = 0;
    let media = 0;
    do{
        numero = prompt("Dame un numero entre el 5 y el 10");
        if(isNaN(numero)){
            alert("Eso no es un numero");
        }else if(numero<5||numero>10){
            alert("El numero debe de estar entre 5 y 10");
        }
        for(i=0;i<numero;i++){
            array1.push((Math.floor(Math.random() * 10))*numero);
        }
        console.log(array1.join(' '));
        for(i = 0;i<array1.length;i++){
            res += array1[i];
        }
        media = res/numero;
        console.log("La media es: " + media);
        for(i=0;i<array1.length;i++){
            if(array1[i]>media){
                console.log("El numero " + array1[i] + " supera la media");
            }
        }
    }while(numero<5||numero>10||isNaN(numero));
}

function ejercicio4(){
    let matriz = [];
    let arrayMa = [];
    arrayMa[0] = [];
    arrayMa[1] = [];
    let cont1 = 0;
    let cont2 = 0;
    let suma = 0;
    let media = 0;
    do {
        num = prompt("Dime un numero entre 2 y 5");
        parseInt(num);
        if(num<2||num>5){
            alert("El numero debe ser entre 2 y 5");
        }else if(isNaN(num)){
            alert("Esto no es un numero");
        }
    } while (num < 2 ||num >5 || isNaN(num));
    for (i = 0; i < num; i++) {
        matriz[i] = [];
        let filaNueva = ' ';
        for (j = 0; j < num; j++) {
            matriz[i][j] = random(1,99);
            suma += matriz[i][j];
            if(matriz[i][j] < 10){
                filaNueva +='0' + matriz[i][j] + ' ';
            }else{
                filaNueva +=matriz[i][j] + ' ';
            }
        }
        console.log(filaNueva);
    }
    media =  suma/(num*num);
    console.log("La media de todos los valores es: " + media);

    /*APARTADO D ESTA MALL*/
    for (i = 0; i < num; i++) {
        let filaNueva1 = ' ';
        let filaNueva2 = ' ';
        arrayMa[i] = [];
        for (j = 0; j < num; j++) {
            if(matriz[i][j] > media){
                filaNueva1 = arrayMa[0].push(matriz[i][j]);
                cont1++;
            }else if(matriz[i][j] >media){
                filaNueva2 = arrayMa[1].push(matriz[i][j]);
                cont2++;
            }
        }
        console.log(filaNueva1);
        console.log(filaNueva2);
    }
    
    
}

