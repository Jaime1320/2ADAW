let botones = document.querySelectorAll("input");
let barra1 = document.querySelector("meter");
let barra2 = document.querySelector("progress");
var boton1Interval;
var boton2Interval;
botones[0].addEventListener("click", function(){
   boton1Interval = setInterval(cargarBarra1 , 200);
   botones[0].disabled = true;
   
})
botones[1].addEventListener("click", function(){
    boton2Interval = setInterval(cargarBarra2 , 200);
    botones[1].disabled = true;
    
 })

function cargarBarra1(){
    barra1Estado = barra1.getAttribute("value");
    if(parseInt(barra1Estado) > 100){
        clearInterval(boton1Interval);
        alert("DESCARGA COMPLETADA");
        barra1.value = 0;
        botones[0].disabled = false;
        
    }else{
        barra1.setAttribute("value", parseInt(barra1Estado) + 2 );
        console.log(barra1Estado);
    }
}
function cargarBarra2(){
    barra2Estado = barra2.getAttribute("value");
    if(parseInt(barra2Estado) > 100){
        clearInterval(boton2Interval);
        alert("DESCARGA COMPLETADA");
        barra2.value = 0;
        botones[1].disabled = false;
    }else{
        barra2.setAttribute("value", parseInt(barra2Estado) + 2 );
        console.log(barra2Estado);
    }
}
