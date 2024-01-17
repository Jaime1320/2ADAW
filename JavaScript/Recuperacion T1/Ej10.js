document.querySelector("input").addEventListener("click",function(){
    let array1 = [];
    let array2 = [];
    let arrayres = [];
    let arrayresu = [];
    let numero;
    let cont = 0;

    do{
        numero = prompt("Dime un numero, cuando quieras parar pon un *");
        if(numero != "*"){
            array1.push(numero);
        }
    }while(numero != "*");
    console.log("Este es el primer array");
    console.log(array1);

    do{
        numero = prompt("Dime otro numero, cuando quieras parar pon un *");
        if(numero != "*"){
            array2.push(numero);
        }
    }while(numero != "*");
    console.log("Este es el segundo array");
    console.log(array2);

    arrayres = array1.concat(array2);
    
    for(let i = 0; i<arrayres.length ; i++){
        for(let j =0 ; j<arrayres.length; j++){
            if(arrayres[i] == arrayres[j]){
                cont++;
            }
        }
        if(cont==1){
            arrayresu.push(arrayres[i]);
        }
        cont = 0;
    }
    console.log("Este es el array final");
    console.log(arrayresu);
})