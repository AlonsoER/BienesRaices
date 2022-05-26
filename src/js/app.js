document.addEventListener('DOMContentLoaded', function(){

    eventListeners();
    darkMode();
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

function darkMode(){
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    if(prefiereDarkMode){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });

    const btn__darkMode = document.querySelector('.dark__mode--boton');

    btn__darkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}