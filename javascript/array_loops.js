// forof Rule

let arrayobj = [1,2,3,4,5,6]
for (const indexval of arrayobj) {
    console.log(indexval)
}


const greetings = 'Hello javascript'
for(const greet of greetings)
{
    console.log(greet)
}
console.log('\n')

// Maps

const map = new Map()
map.set('in', 'INDIA')
map.set('USA',  'UNITES STATES OF AMERICA')
map.set('fr', 'FRANCE')
console.log('\n')

console.log(map)

for(const key of map){
    console.log(key);
}

// destructred array

for (const [key , value] of map){
    console.log(key, ':-' ,value)
}



// forof on object

// const myobj1 = {
//     game1:'nfs',
//     game2:'call of duty',
//     game1:'pubg',   
// }

// for(const [key1, value2] of myobj1){
//     console.log(key1,":",value2);
// }