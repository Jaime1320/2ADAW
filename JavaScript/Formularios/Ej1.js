document.querySelectorAll("input")[2].addEventListener("click",function(ev){
    ev.preventDefault();
    let texto1 = document.querySelectorAll("input")[0].value;
    document.querySelectorAll("input")[1].value = texto1;
});