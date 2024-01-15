document.querySelector("input").addEventListener("click", function() {
    let media = "";
    let superaMedia = "";
    let dobleMedia = "";
    let numGrandes = "";
    do {
        num1 = prompt("Dime un numero");
        num2 = prompt("Dime un numero");
        num3 = prompt("Dime un numero");
        num4 = prompt("Dime un numero");
        num5 = prompt("Dime un numero");
        num6 = prompt("Dime un numero");
        num7 = prompt("Dime un numero");
        num8 = prompt("Dime un numero");
        num9 = prompt("Dime un numero");
        num10 = prompt("Dime un numero");
    }while(isNaN(num1)||isNaN(num2)||isNaN(num3)||isNaN(num4)||isNaN(num5)||isNaN(num6)||isNaN(num7)||isNaN(num8)||isNaN(num9)||isNaN(num10));

    media = (parseInt(num1)+parseInt(num2)+parseInt(num3)+parseInt(num4)+parseInt(num5)+parseInt(num6)+parseInt(num7)+parseInt(num8)+parseInt(num9)+parseInt(num10))/10;

    dobleMedia = media * 2;

    alert("La media es de: "+ media);

    if(num1>=media){
        superaMedia += num1 + ", ";
    }
    if(num2>=media){
        superaMedia += num2 + ", ";
    }
    if(num3>=media){
        superaMedia += num3 + ", ";
    }
    if(num4>=media){
        superaMedia += num4 + ", ";
    }
    if(num5>=media){
        superaMedia += num5 + ", ";
    }
    if(num6>=media){
        superaMedia += num6 + ", ";
    }
    if(num7>=media){
        superaMedia += num7 + ", ";
    }
    if(num8>=media){
        superaMedia += num8 + ", ";
    }
    if(num9>=media){
        superaMedia += num9 + ", ";
    }
    if(num10>=media){
        superaMedia += num10;
    }
    console.log(dobleMedia);
    console.log(media);
    alert("Los numeros que superan la media son: " + superaMedia);

    if(num1>=dobleMedia){
        numGrandes += num1 + ", ";
    }
    if(num2>=dobleMedia){
        numGrandes += num2 + ", ";
    }
    if(num3>=dobleMedia){
        numGrandes += num3 + ", ";
    }
    if(num4>=dobleMedia){
        numGrandes += num4 + ", ";
    }
    if(num5>=dobleMedia){
        numGrandes += num5 + ", ";
    }
    if(num6>=dobleMedia){
        numGrandes += num6 + ", ";
    }
    if(num7>=dobleMedia){
        numGrandes += num7 + ", ";
    }
    if(num8>=dobleMedia){
        numGrandes += num8 + ", ";
    }
    if(num9>=dobleMedia){
        numGrandes += num9 + ", ";
    }
    if(num10>=dobleMedia){
        numGrandes += num10;
    }

    alert("Los numeros que el doble de la media son: " + numGrandes);
})