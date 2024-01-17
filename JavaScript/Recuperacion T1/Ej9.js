document.querySelector("input").addEventListener("click", function(){
    let numN;
    let matriz = [];
    let cont = 1;
    let res = 0;
    do{
        numN = prompt("Dime un numero positivo mayor a 2");
        if(numN>2){
            for(let i = 0 ; i<numN ; i++){
                let filanueva = '';
                matriz[i] = [];
                for(let j = 0 ; j<numN ; j++){
                    res = numN * cont;
                    if(res<10){
                        matriz[i][j] = res;
                        filanueva += "0" + matriz[i][j] + " ";
                    }else{
                        matriz[i][j] = res;
                        filanueva += matriz[i][j] + " ";
                    }
                    cont ++;
                }
                console.log(filanueva);
            }
        }
    }while(isNaN(numN)||numN<2);
})