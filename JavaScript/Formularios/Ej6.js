document.querySelectorAll("input[type='checkbox']").forEach(function(element){
    element.addEventListener("change",function(){
        var opciones = [];
        let desplegable = document.querySelector("select");
            for (var i = 0; i < desplegable.options.length; i++) {
                opciones.push(desplegable.options[i].value);
            }
            if (opciones.includes(element.value)){
                for (var i = 0; i < desplegable.options.length; i++) {
                    if (desplegable.options[i].value == element.value) {
                        desplegable.removeChild(desplegable.options[i]);
                    }
                }
            }else{
                let opcion=document.createElement("option");
                opcion.textContent=element.value;
                console.log(opcion);
                desplegable.appendChild(opcion);
            }            
    })
})