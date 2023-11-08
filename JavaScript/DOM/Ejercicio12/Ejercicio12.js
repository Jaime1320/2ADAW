let botones = document.querySelectorAll("input");
let caja = document.querySelector("div");
let margensito = window.getComputedStyle(document.querySelector("div")).marginLeft;
let ventana = window.innerWidth;
console.log(parseInt(ventana));
console.log(parseInt(margensito));
botones[1].disabled = true;
botones[0].disabled = false;
botones[0].addEventListener("click",function(){
    botones[1].disabled = false;
    if(((parseInt(margensito) + parseInt(caja.offsetWidth)) + 5 )> parseInt(ventana)){
        this.disabled = true;
        caja.style.marginLeft = 0;
        caja.style.right = 0;
    }else{
        document.querySelector("div").setAttribute("style","margin-Left:"+ margensito);
    }
    console.log(parseInt(margensito));
    console.log(margensito);
    margensito = (parseInt(margensito) + 5) + "px";
    console.log(margensito);
})

botones[1].addEventListener("click",function(){
    if(parseInt(margensito)<=0){
        this.disabled = true;
    }else{
        botones[0].disabled = false;
        margensito = (parseInt(margensito) - 5) + "px";
        document.querySelector("div").setAttribute("style","margin-Left:"+ margensito);
        console.log(margensito);
    }
})




