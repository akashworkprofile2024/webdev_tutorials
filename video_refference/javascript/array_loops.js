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
console.log('MAPS')
const map = new Map()
map.set('in', 'INDIA')
map.set('USA',  'UNITES STATES OF AMERICA')
map.set('fr', 'FRANCE')
console.log('\n')

console.log(map)

for(const key of map){
    console.log(key);
}

// MAPS using destructred array
console.log('MAPS using destructred array')
for (const [key , value] of map){
    console.log(key, ':-' ,value)
}
console.log('\n')


// forin on object
console.log('forin on object')
const myobj1 = {
    game2:'call of duty',
    game1:'pubg',
    game3:'nfs',  
}

for(const key1 in myobj1){
   console.log(`${key1} : ${myobj1[key1]}`)
}
console.log('\n')


// forin loop on map

// const map1 = new Map()
// map1.set('Game1','Cod')
// map1.set('Game2','Pubg')
// map1.set('Game3','POP')

// for (const key2 in map1) {
//     console.log(key2)
// }
 

// foreach loop
console.log('foreach loop')
const arrfy = ['java','python','c++', 'html']
arrfy.forEach(function(storearray){
    console.log(storearray)
})

console.log('\n')


// foreach using array function
console.log('foreach using array function')
arrfy.forEach((storearrfy) => {
   console.log(storearrfy) 
})

console.log('\n')


// foreach loop fetching
console.log('foreach loop fetching')
arrfy.forEach((item,index,arr)=>{
    console.log(item , index , arr);
})
console.log('\n')


const codelang = [
    {
        langname:'python',
        langfiletype:'py'
    },
    {
        langname:'java',
        langfiletype:'java'
    },
    {
        langname:'c++',
        langfiletype:'cpp' 
    }
]


codelang.forEach((item , index , arr) => {
    console.log(item, index , arr);
})






