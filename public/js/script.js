let btnopen = window.document.querySelector("input#open");
let btnclose = window.document.querySelector("button#close");
let modal = window.document.querySelector("dialog#pop-up")

btnopen.addEventListener("click", (e)=>{

    modal.showModal();
})

