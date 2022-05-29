const hamburguesa = document.querySelector('.hamburguesa');
const navegacion=document.querySelector('.navegacion');
const enlaces=document.querySelectorAll('.navegacion a');
const fecha=document.querySelector('.fecha');


document.addEventListener('DOMContentLoaded',()=>{

        mostrarmenu();
        cerrarmenu();
        fechaActual();
});
function mostrarmenu(){
    hamburguesa.addEventListener('click',()=>{
        navegacion.classList.toggle('ocultar');
        
    });
}

function cerrarmenu(){
    enlaces.forEach(enlace=>{
        enlace.addEventListener('click',(e)=>{
           if(e.target.tagName==='A'){
               navegacion.classList.add('ocultar');
           }
        });
    });
}

function fechaActual(){
    let fechaHoy = new Date().getFullYear()
    fecha.textContent=fechaHoy;
}


