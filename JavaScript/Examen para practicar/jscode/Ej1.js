function random(min, max) {
    return parseInt(Math.random() * (max - min + 1) + min);
}

let intervalo;

document.querySelectorAll("input")[0].addEventListener("click",function(){

    intervalo = setInterval(function(){
        document.querySelectorAll("div")[0].textContent = random(1,50);
        document.querySelectorAll("div")[1].textContent = random(1,50);
    },1000);

    // document.querySelectorAll("div")[0].textContent = random(1,50);
    // document.querySelectorAll("div")[1].textContent = random(1,50);

    this.disabled = true;
    document.querySelectorAll("input")[1].disabled = false;
    document.querySelectorAll("div")[2].textContent = "";
})

document.querySelectorAll("input")[1].addEventListener("click",function(){

    clearInterval(intervalo);

    let num1 = document.querySelectorAll("div")[0].textContent;
    let num2 = document.querySelectorAll("div")[1].textContent;

    // Manera ProPlayer
    // document.querySelectorAll("div")[2].textContent = Math.max(num1,num2);

    // Manera Soldadito
    if(num1>num2){
        document.querySelectorAll("div")[2].textContent = num1;
    }else{
        document.querySelectorAll("div")[2].textContent = num2;
    }

    this.disabled = true;
    document.querySelectorAll("input")[0].disabled = false;
    
})