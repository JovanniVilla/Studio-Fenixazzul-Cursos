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
registro.value='super envio';//cambia el valor de el atributo value