document.querySelectorAll("input")[2].addEventListener("click", function(ev){
    ev.preventDefault();
    let num = document.querySelectorAll("input")[0].value;
    console.log(num);
    let res = num/0.83;
    console.log(res);
    document.querySelectorAll("input")[1].value = res;
})