document.querySelector("input").addEventListener("click",function(){

    let media  = 0;
    let superanMedia = "";

    do{
        numero = prompt("Dime un numero entre el 5 y el 10 (incluidos)");
    }while(isNaN(numero)||numero<5||numero>10);
    
    let array = [];

    for(let i = 0; i<numero; i++){
        array.push(Math.floor(random(0,9))*numero);
        media += parseInt(array[i]);
    }
    media = media/numero;

    for(let i = 0;i<numero;i++){
        if(parseInt(array[i])>= media){
            superanMedia += array[i] + " ";
        }
    }
    console.log(array.join(' '));;
    console.log("La media es de: " + media);
    console.log("Los numeros que superan la media son: " + superanMedia);
})

function random(min, max) {
    return parseInt(Math.random() * (max - min + 1) + min);
}