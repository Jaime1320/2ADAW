document.querySelectorAll("input")[0].addEventListener("click",function(){

    document.querySelectorAll("input")[1].disabled = false;

    foto = "./img/";
    foto += prompt("Dime la ruta de la imagen");

    if(foto == "./img/"){
        foto += "terra.jpg";
        let fotito = document.createElement("img");
        fotito.setAttribute("src",foto);
        fotito.setAttribute("class","foto");
        document.querySelector("div").appendChild(fotito);
    }else{
        foto += ".jpg";
        let fotito = document.createElement("img");
        fotito.setAttribute("src",foto);
        fotito.setAttribute("class","foto");
        document.querySelector("div").appendChild(fotito);
    }

}) 

//Eliminamos todas las fotos del div
document.querySelectorAll("input")[1].addEventListener("click",function(){
    let midiv = document.querySelector("div");
    while(midiv.firstChild){
        midiv.removeChild(midiv.firstChild);
    }
})
