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
console.log(c);

// check scope according to let , const , var
if(true){
    let x = 'let variable'
    const y = 'const variable'
    var z = 'var variable'
}

// console.log(x); // not access outside of the scope
// console.log(y); // Same as let x variable
console.log(z); // working variable outside scope
