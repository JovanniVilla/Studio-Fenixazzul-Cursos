//las promesas son tareas asincronas

console.log('Inicio')

// la Promesa 
new Promise( (resolve, reject) => {

    console.log('cuerpo de la promesa')
    // la resolucion de la promesa se ejecuta la final de la ejecucion 
    resolve('Promesa resuelta')
})
.then( msg => console.log( msg ) )

console.log('Fin')