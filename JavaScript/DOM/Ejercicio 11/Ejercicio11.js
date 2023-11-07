var div1 = document.getElementById("div1");
var div2 = document.getElementById("div2");

//Para pillar elementos de css
console.log(window.getComputedStyle(div2).getPropertyValue("visibility"));

div1.addEventListener("mouseover", function(){
    div2.style.visibility = "visible";
})
div1.addEventListener("mouseleave", function(){
    div2.style.visibility = "hidden";
})
