



const person = {
    name: 'Tony',
    age: 45,
    codeName: 'Ironmen',
    power:'muy verguitas'
}

//const {name, age, codeName, power ='sin poder'} = person

/* console.log(name)
console.log(age)
console.log(codeName)

console.log(power) */

// 
const createHero = ({ name, age, codeName, power }) => 
   ({
        id:321432164614,
        name: person.name,
        age: person.age,
        codeName: person.codeName,
        power: person.power
    })

    
console.log(createHero(person))

//deconstruccion de una funcion en JS 
const {name, age, codeName, power ='sin poder'} = createHero


console.log (name)
console.log (age)
console.log (codeName)
