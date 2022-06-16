/* selector general de los elementes de HTML*/
const tituloPagina = document.querySelector(".header__texto h2"); // regresa 1 o 0 elementos 





console.log(tituloPagina);

tituloPagina.textContent ="Se cambio el titulo con JavaScrip"; //cambia el Texto en HTML con JS
tituloPagina.classList.add('tituloCabecera')//agrega una Clase nueva a a la seleccion


const enlaces = document.querySelectorAll('.navegacion a'); //se seleccionan todos los que cumplan con el criterio


console.log(enlaces);

console.log(enlaces[0]);

enlaces[0].textContent='Sobre Nosotros'; //cambia el contenido del titulo
/* enlaces[0].href = 'https://www.google.com';// cambia la direccion del link  */


/*** Get Elemnet by ID ***/
const registro = document.getElementById('submit'); //seleccion de elementos por ID 

console.log('registro'); // imprime el registro
/* registro.value='super envio'; */ //cambia el valor de el atributo value

/* generar enlace con JS */

const nuevoEnlace= document.createElement('A');

/* agregar el href */
nuevoEnlace.href='http://www.google.com';
/* agregar la clase */ 
nuevoEnlace.classList.add('navegacion__enlace');
/* agregar el Texto */
nuevoEnlace.textContent='New Enlace-JS';
console.log(nuevoEnlace);
const navegacion= document.querySelector('.navegacion');
navegacion.appendChild(nuevoEnlace);

/***** los eventos en Javascrip *****/

window.addEventListener('load', function(){//load espera a que se cargue todo el archivo (html js Css img)
    console.log(2);
})

document.addEventListener('DOMContentLoaded', function(){// solo espera a que se cargue HTML no Css js o img
    console.log(4);
})

const botonEnviar= document.querySelector('.boton--primario');// selecciona dentro del html el que tiene la claseboton--primario
botonEnviar.addEventListener('click', function(evento){//agrega un evento de escucha cuando se realice click, corre la funcion
    console.log("enviando Informacion");
    evento.preventDefault();// detinen o previene el comportamiento Default,
    
});

