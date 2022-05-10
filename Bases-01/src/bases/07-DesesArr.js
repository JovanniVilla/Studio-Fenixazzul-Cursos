//desestructuracion de Arreglos o Arrays 

const characters = ['Goku', 'Vergueta','Truncks']

const goku = characters[0]
const vegueta = characters[1]
const Truncks = characters[2]


/* se debe de poner segun se la pocssiosion dentro del arreglo con comitas para iundicar que no se queire defienr 
el valor  */
const [g,v,t] = characters

const [,,c] = characters

console.log(g,v,t)
console.log(c)