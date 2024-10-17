/* 
 Two types of  scope
 Global scope
 Block scope
*/


let a = 10
const b = 20
var c = 30 

console.log(a);
console.log(b);
console.log(c,'\n');

// check scope according to let , const , var
if(true){
    let x = 'let variable'
    const y = 'const variable'
    var z = 'var variable'
}

// console.log(x); // not access outside of the scope
// console.log(y); // Same as let x variable
console.log(z , '\n'); // working variable outside scope

// ====================================

let number = 45
if(true){
    let number = 500
    console.log('Inner: ',number);
}

console.log('Outside: ', number);

// ====================================




