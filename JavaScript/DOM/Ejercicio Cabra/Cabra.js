

document.querySelectorAll("input")[0].addEventListener("click",function(){
    let opciones = document.querySelector("select");
    let posi = "";
    let top = "";
    let left = "";
    let letra = "";
        if(opciones.value.toLowerCase() == "align"){
            document.querySelector("H1").style.setProperty("position","unset");
            do{
                posi = prompt("Dime donde quieres el H1(left, right o center");
            }while((posi!="left")&&(posi != "right")&&(posi != "center"));
            if(posi == "left"){
                document.querySelector("H1").style.setProperty("text-align","left");
            }
            if(posi == "right"){
                document.querySelector("H1").style.setProperty("text-align","right");
            }
            if(posi == "center"){
                document.querySelector("H1").style.setProperty("text-align","center");
            }
        }else if(opciones.value.toLowerCase() == "posicion"){
            document.querySelector("H1").style.setProperty("position","absolute");
            do{
                top = prompt("Dime un numero para el top");
            }while(isNaN(top)&&parseInt(top)<0&&parseInt(top)>innerHeight);

            document.querySelector("H1").style.setProperty("top",top + "px");

            do{
                left = prompt("Dime un numero para el left");
            }while(isNaN(left)&&parseInt(left)<0&&parseInt(left)>innerWidth);

            document.querySelector("H1").style.setProperty("left",left + "px");
        }else{
            do{
                letra = prompt("Dime el tamaño de la letra");
            }while(isNaN(letra)&&parseInt(top)<=0);

            document.querySelector("H1").style.setProperty("font-size",letra + "px");
        }
    
})

/**
 * Event listener para el boton de resetear
 * Resetea los estilos de position, top, left, text-align, y font-size
 * @author Alberto Florido
 */
document.querySelectorAll("input")[1].addEventListener("click", function(){
    document.querySelector("H1").style.setProperty("position","unset");
    document.querySelector("H1").style.setProperty("text-align","inherit");
    document.querySelector("H1").style.setProperty("top", "unset");
    document.querySelector("H1").style.setProperty("left", "unset");
    document.querySelector("H1").style.setProperty("font-size", "");
})