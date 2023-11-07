let parra = document.querySelector("p");
console.log(parra);
//solo para mirar las propiedades
let tocarparra = window.getComputedStyle(parra);
console.log(parra.style.cssText);
console.log(parseInt(tocarparra.getPropertyValue("width")));
parra.addEventListener("click", function(){
    console.log(tocarparra.getPropertyValue("color"));
    parra.style.setProperty("color", "black");
    parra.style.setProperty("width", 300 + "px");
    parra.style.setProperty("background-color" , "lightblue");
    parra.style.setProperty("font-size", 30 + "px");
})
