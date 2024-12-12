/* Primitive data type
  String , Number , Boolean , Null , Undefined , Symbol , Bigint 
*/



const id = Symbol('123')
const anotherid = Symbol('123')

console.log(id);
console.log(anotherid);
console.log('is Id && anotherid same: ',id === anotherid);

const bigNumber = 454848759595623215487n
console.log(bigNumber,'Type: ',typeof(bigNumber));


/* Non Primitive type & Reference data type
   Array , Objects, Functions
*/
const lang = ['html' , 'css', 'javascript', 'php']

let myobj = {
    name: "Akash",
    age:22
}

console.log(lang,"Type: ",typeof(lang),'\n');
console.log(myobj,"Type: ",typeof(myobj),'\n');

// function (Non premitive)

const  myfunction = function(){
     console.log('Hello');
}

console.log(myfunction,typeof(myfunction))


const emptyvar = null
console.log(emptyvar, typeof(emptyvar))






