document.addEventListener("DOMContentLoaded",function(){
    var confpass=document.getElementById('pass2')
    var password=document.getElementById('pass')
    confpass.addEventListener("blur",function(){
        var h6=document.createElement("h6")
        if(confpass.value==password.value){
            h6.textContent="las contraseñas coinciden"
        }else{
            h6.textContent="las contraseñas no coinciden"
            
        }
        confpass.parentNode.appendChild(h6)
    })
})