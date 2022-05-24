document.addEventListener('DOMContentLoaded', function(){

    eventListeners();
})

function eventListeners(){
    const movileMenu = document.querySelector('.mobile__menu');
    movileMenu.addEventListener('click', navegacionResponsive);
}

// Si la navegacion tiene esa clase se la quita y si no se la agrega
function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }
}