document.querySelectorAll("input")[4].addEventListener("click", function(ev){
    document.querySelector("textarea").value = "";
    ev.preventDefault();
    let opciones = document.querySelectorAll("input[type = 'checkbox']");
    for(i = 0 ; i < opciones.length; i++){
        if(opciones[i].checked){
            document.querySelector("textarea").value += opciones[i].value + "\n";
        }
        
    }
})




