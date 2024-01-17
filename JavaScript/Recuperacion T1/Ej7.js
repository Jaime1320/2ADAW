document.querySelector("input").addEventListener("click",function(){
    let arrayantigua = [];
    let arraynueva = [];
    let numero;
    let acumulado = 0;
    
    do{
        numero = prompt("Dime un numero, si quieres parar pon un *");
        if(numero != "*"){
            arrayantigua.push(parseInt(numero));
        }
    }while(numero != "*")

    console.log("Esta es la array original: ");
    console.log(arrayantigua);

    for(let i = 0 ; i<arrayantigua.length ; i++){

        acumulado += arrayantigua[i];
        arraynueva[i] = acumulado;
        
    }
    console.log("Esta es la array nueva: ");
    console.log(arraynueva);
})