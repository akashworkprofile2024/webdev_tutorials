// Nested function Scope

function one(){
    const username ='Akash'

    function two(){
        const email = 'akash.bisvas2018@gmail.com'
        console.log('Take From Parent function: ',username)
    }
    // console.log('Take from childern function: ',email);
    two()
}
one()
// ============================

if(true){
   const username = 'user1name'
   if(username === 'user1name'){
          const web = 'website1'
         console.log(username + web);
           
   }

//    console.log(web);
   
}
// console.log(username);


// ===========================
console.log(addone(5));
 addone(5)
function addone(value){
    return 1 + value
                
}



// console.log(addtwo(5));  // not working
 
const addtwo = function(num){
    return num + 2
}

