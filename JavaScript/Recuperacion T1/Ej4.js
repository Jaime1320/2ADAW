function random(min, max) {
    return parseInt(Math.random() * (max - min + 1) + min);
}
document.querySelector("input").addEventListener("click", function(){
    let matriz = [[]];
    let arrayres = [[],[]];
    let media  = 0;

    do{
        tamanio = prompt("Dime un numero entre 2 y 5 (Ambos incluidos)");
    }while(isNaN(tamanio) || tamanio<2 ||tamanio>5);

    for(let i = 0;i<tamanio;i++){
        matriz[i] = [];
        let filanueva = ' ';
        for(let j = 0;j<tamanio; j++){
            matriz[i][j] = random(1,99);
            media += matriz[i][j];
            if(matriz[i][j]<10){
                filanueva += "0" + matriz[i][j] + ' ';
            }else{
                filanueva += matriz[i][j] + ' ';
            }
        }
        console.log(filanueva);
        
    }
    media = media/(tamanio * tamanio);
    console.log("La media es de: " + media);

    for(let i=0;i<tamanio;i++){
        for (let j = 0; j < tamanio; j++) {
            if (matriz[i][j]>media) {
                arrayres[0].push(matriz[i][j]);
            }else{
                arrayres[1].push(matriz[i][j]);
            }
        }
    }


    for (let i = 0; i < arrayres.length; i++) {
        let filanueva = ' ';
        for(let j = 0;j<arrayres[i].length;j++){
            if(arrayres[i][j]<10){
                filanueva += "0" + arrayres[i][j] + ' ';
            }else{
                filanueva += arrayres[i][j] + ' ';
            }
        }
        console.log(filanueva);
    }

    let orden;
    do {
        orden = parseInt(prompt("0 (ascendente) o 1 (descendente)"));
        if (orden < 0 || orden > 1 || isNaN(orden)) {
            alert("0 o 1");
        }
    } while (orden < 0 || orden > 1 || isNaN(orden));

    if (orden == 0) {
        arrayres[0].sort(function (a, b) { return a - b });
        arrayres[1].sort(function (a, b) { return a - b });
    } else {
        arrayres[0].sort(function (a, b) { return b - a });
        resultado[1].sort(function (a, b) { return b - a });
    }
    console.log("Orden");
    for (let i = 0; i < arrayres.length; i++) {
        console.log(arrayres[i].join(" "));
    }
})