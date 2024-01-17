document.querySelector("input").addEventListener("click",function(){
    let num1;
    let num2;
    let arrayres = [];
    do{
        num1 = prompt("Dime hasta donde quieres hacer las multipicaciones ");
        if(isNaN(num1)){
            alert("Tienes que poner un numero valido!!")
        }
        num2 = prompt("Dime que numero quieres que sea multiplicado");
        if(isNaN(num1)){
            alert("Tienes que poner un numero valido!!")
        }

        if(num1<0||num2<0){
            console.log(arrayres);
        }else{
            for(let i = 1 ; i <= num1 ; i++){
                arrayres[i - 1] = i * num2;
            }
            console.log(arrayres);
        }
    }while(isNaN(num1)||isNaN(num2));
})