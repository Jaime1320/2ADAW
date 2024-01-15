function cambioGramos(){
    do{
        gramos = prompt("Dame una cantidad en gramos");
        if(isNaN(gramos)){
            alert("No estas poniendo un numero");
        }else if(gramos<=0){
            alert("El numero debe ser mayo que 0");
        }
    }while(isNaN(gramos)||gramos <= 0);
    alert("La cantidad en kilogramos es de: "  + gramos /1000 + "kg"); 
}