// se inicializa Arreglo con 4 elementos definidos
const arreglo = [1,2,3,4]

// se apunta a el primer valor del arrglo
console.log(arreglo[0])

// suma dos valores de un arreglo y lo desfine en una variable
suma2Valores = arreglo[0]+arreglo[1]

//imprime la variable de la suma de los valores 
console.log(suma2Valores)

//imprime lo largo del arreglo
console.log(arreglo.length)

//agrega un valor al Final del Arreglo 
arreglo.push(5)

//imprime lo largo del arreglo
console.log(arreglo.length)

//copia el arreglo y lo asisgna a uno nuevo es totalmente diferente 
arreglo2 = [...arreglo]

//agrega datos al final del arreglo copiado sin modificar el arrglo 1 
arreglo2.push(10)
arreglo2.push(50)

//imprime lo largo del arreglo2 o arrglo copiado
console.log(arreglo2.length)

//arreglo 3 defienicdo el arreglo con la opcion o la funcion map
const arreglo3 = arreglo2.map( function(n){
    return n*2
} )
// agregar otro dato al arreglo3
arreglo3.push(14)
console.log(`el arreglo 3 tiene ${arreglo3.length} elementos`)