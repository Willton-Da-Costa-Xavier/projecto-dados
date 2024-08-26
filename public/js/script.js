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

let anexos = window.document.querySelector("#anexos");
let lista = window.document.querySelector("#lista");
let nome = urlParams.get('nome') || "";
let email = urlParams.get('email') || "";
let pass = urlParams.get("senha") || "";

// inputmail.value = email;
// inputsenha.value = pass;
// inputusuario.value = nome;

function animar(){
    const form = window.document.querySelector("#form");
    form.classList.toggle("ativar");
}

if(urlParams.has("sucess")){
    modal.showModal();

   
}

if(urlParams.has("erronome")){
    usuario.style.color = "rgba(246, 11, 11, 0.677)";
    inputusuario.placeholder = "digite um usuario valido"
   
    
    inputusuario.addEventListener("focus",()=>{
        inputusuario.placeholder = "";
        usuario.style.color = "white";
    })
}

if(urlParams.has("erromail")){
    mail.style.color = "rgba(246, 11, 11, 0.677)";
    inputmail.placeholder = "digite um e-mail valido";
   
    

    inputmail.addEventListener("focus",()=>{
        inputmail.placeholder = ""
        mail.style.color = "white";
    })
}

if(urlParams.has("errosenha")){
    senha.style.color = "rgba(246, 11, 11, 0.677)";
    inputsenha.placeholder = "digite uma senha valida";
  
    inputsenha.addEventListener("focus",()=>{
        inputsenha.placeholder = "";
        senha.style.color = "white";
    })
}


btnclose.addEventListener("click",()=>{
    modal.close();
})
