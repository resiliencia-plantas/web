//PARA MOSTRAR Y OCULTAR EL MENU

const input__btn__menu = document.querySelector('#input__btn__menu');
const ul__menu = document.querySelector('#ul__menu');

input__btn__menu.addEventListener("click", function(){
    ul__menu.classList.toggle("mostrar");
});


//PARA MOSTRAR Y ACULTAR EL SUBMENU PLANTAS

const submenu = document.querySelectorAll('.submenu');

for(let i=0; i<submenu.length; i++) {
    submenu[i].addEventListener("click", function(){
        if(window.innerWidth < 1024) {
            const ul_submenu = this.nextElementSibling;
            const height = ul_submenu.scrollHeight;
            
            if(ul_submenu.classList.contains("desplegar")){
                ul_submenu.classList.remove("desplegar");
                ul_submenu.removeAttribute("style");
            } else {
            
            ul_submenu.classList.add("desplegar");
            ul_submenu.style.height = height + "px";
                
            }
        }
    });
}

//PARA MOSTRAR Y ACULTAR EL SUBMENU BLOG

const submenu_dos = document.querySelectorAll('.submenu_dos');

for(let i=0; i<submenu_dos.length; i++) {
    submenu_dos[i].addEventListener("click", function(){
        if(window.innerWidth < 1024) {
            const ul_submenu = this.nextElementSibling;
            const height = ul_submenu.scrollHeight;
            
            if(ul_submenu.classList.contains("desplegar")){
                ul_submenu.classList.remove("desplegar");
                ul_submenu.removeAttribute("style");
            } else {
            
            ul_submenu.classList.add("desplegar");
            ul_submenu.style.height = height + "px";
                
            }
        }
    });
}

var header = document.getElementById('header');
//var altura = header.offsetTop;
var altura = 0.1;

window.addEventListener('scroll', function(){
    if (window.pageYOffset > altura) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});
