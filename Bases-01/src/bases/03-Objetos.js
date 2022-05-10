

//los objetos o los diccionarios 

const persona ={
    nombre: 'Tony',
    apellido: 'Stark',
    numero: '331340230',
    domicilio:{
        ciudad:'Guadalajara',
        codigoPostal:'44230',
        lat:14.3266,
        longitud:103.1565435
    }
    //nombreCompleto = nombre+apellido

}

//accede a al objeto en general 
 console.log(persona)
 //accede a los datos dentro del objeto => dentro del domicilio >>> se optiene exactamente el codigo postal
 console.log(persona.domicilio.codigoPostal)
//para hacer una referencia a un nuevo objeto se debe de asignar con X={}
 const persona2 = {...persona}

 persona2.nombre= "Jovanni"
 persona2.apellido="Garcia"

 console.log(persona2.nombre)
 console.log(persona2.apellido)