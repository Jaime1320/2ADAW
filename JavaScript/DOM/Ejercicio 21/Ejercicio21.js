document.querySelectorAll("a")[0].addEventListener("mouseover",function(){
    let enlace = document.querySelector("a").getAttribute("href");
    let midiv = document.createElement("div");
    let Etiquetaa = document.createElement("a");

    Etiquetaa.setAttribute("href" , enlace);
    midiv.setAttribute("class", "clase1");
    Etiquetaa.textContent = enlace;
    Etiquetaa.setAttribute("target" ,"blank");
    midiv.textContent = "La Url del enlace es: ";
    midiv.appendChild(Etiquetaa)
    document.body.appendChild(midiv);

})