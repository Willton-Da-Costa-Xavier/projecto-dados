let btnopen = window.document.querySelector("input#open");
let btnclose = window.document.querySelector("button#close");
let modal = window.document.querySelector("dialog#pop-up");
let usuario = window.document.querySelector("fieldset#usuario");
let mail = window.document.querySelector("fieldset#mail");
let senha = window.document.querySelector("fieldset#senha");
const urlParams = new URLSearchParams(window.location.search);

if(urlParams.has("sucess")){

    modal.showModal();
}

if(urlParams.has("erronome")){
    usuario.style.color = "red";
    alert("digita um usuario valido");
}

if(urlParams.has("erromail")){
    mail.style.color = "red";
    alert("digita um e-mail valido");
}

if(urlParams.has("errosenha")){
    senha.style.color = "red";
    alert("digita uma senha valida");
}

btnclose.addEventListener("click",()=>{

    modal.close();
})

