document.querySelector("input").addEventListener("click",function(){
    let mitabla =document.createElement("table");
    mitabla.setAttribute("class", "tabla");
    document.querySelector("div").appendChild(mitabla);
    let filas = "";
    let celdas = "";
    do{
        filas = prompt("Dime un numero de filas");
    }while(isNaN(filas)||parseInt(filas)<0||parseInt(filas)>10);

    do{
        celdas = prompt("Dime un numero de celdas para cada fila");
    }while(isNaN(celdas)||parseInt(celdas)<0||parseInt(celdas)>10);
    
    for(let i = 0; i<filas ; i++){{
        let filanueva = document.createElement("tr");
        mitabla.appendChild(filanueva);
        for(let j = 0;j<celdas; j++){
            let celdanueva =document.createElement("td");
            filanueva.appendChild(celdanueva);
            celdanueva.textContent = i;
        }
    }}
})