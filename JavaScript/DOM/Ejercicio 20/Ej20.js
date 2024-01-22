function random(min, max) {
    return parseInt(Math.random() * (max - min + 1) + min);
}

document.querySelectorAll("input")[0].addEventListener("click",function(){
    let generar = document.createElement("p");
    generar.textContent = document.querySelectorAll("p")[0].innerText;
    generar.setAttribute("class", "clase2");
    document.body.appendChild(generar);
    document.querySelectorAll("input")[2].disabled = false;
})

document.querySelectorAll("input")[1].addEventListener("click",function(){
    document.body.removeChild(document.querySelectorAll("p")[0]);
    this.disabled = true;
    document.querySelectorAll("input")[3].disabled = true;
})

document.querySelectorAll("input")[2].addEventListener("click",function(){
    while(document.querySelectorAll(".clase2")){
        document.body.removeChild(document.querySelector(".clase2"));
    }
})

document.querySelectorAll("input")[3].addEventListener("click",function(){
    let tabla = document.createElement("table");
    
    for(let i = 0; i<2;i++){
        let fila = document.createElement("tr");
        tabla.appendChild(fila);
        for(let j = 0; j<2 ;j++){
            let columna = document.createElement("td");
            columna.textContent = random(1,10);
            fila.appendChild(columna);
        }
    }
    tabla.setAttribute("class","tablita");

    document.body.replaceChild(tabla,document.querySelector(".clase1"));
})