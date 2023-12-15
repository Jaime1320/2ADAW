document.querySelectorAll("input")[0].addEventListener("keyup",function(){
    document.querySelectorAll("input")[1].value = this.value;
})