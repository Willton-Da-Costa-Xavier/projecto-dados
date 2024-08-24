let btnopen = window.document.querySelector("input#open");
let btnclose = window.document.querySelector("button#close");
let modal = window.document.querySelector("dialog#pop-up");
let usuario = window.document.querySelector("fieldset#usuario");
let mail = window.document.querySelector("fieldset#mail");
let senha = window.document.querySelector("fieldset#senha");
let inputusuario = window.document.querySelector("input#idnome");
let inputmail = window.document.querySelector("input#idmail");
let inputsenha = window.document.querySelector("input#idpass");
const urlParams = new URLSearchParams(window.location.search);
let caixa = window.document.querySelector("div#cadcontainer");

if(urlParams.has("sucess")){
    modal.showModal();
}

if(urlParams.has("erronome")){
    usuario.style.color = "rgba(246, 11, 11, 0.677)";
    inputusuario.placeholder = "digite um usuario valido"

    inputusuario.addEventListener("focus",()=>{
        inputusuario.placeholder = ""
    })
}

if(urlParams.has("erromail")){
    mail.style.color = "rgba(246, 11, 11, 0.677)";
    inputmail.placeholder = "digite um e-mail valido";

    inputusuario.addEventListener("focus",()=>{
        inputusuario.placeholder = ""
    })
}

if(urlParams.has("errosenha")){
    senha.style.color = "rgba(246, 11, 11, 0.677)";
    inputsenha.placeholder = "digite uma senha valida";
    inputusuario.addEventListener("focus",()=>{
        inputusuario.placeholder = ""
    })
}

btnclose.addEventListener("click",()=>{
    modal.close();
})

