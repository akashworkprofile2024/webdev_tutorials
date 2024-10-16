function myfun(){
    console.log('J');
    console.log('A');
    console.log('V');
    console.log('A');
    
}
myfun()   //refernce

// ====================================
/* Add Two numbers */
function addnum(a,b){
    console.log('addition: ',a+b,'\n')
}
addnum(3,4)

// ====================================
/* store function result into variable  */
function addnumbers(x,y){
   return x + y
}
const result = addnumbers(3,4)
console.log("Result: ", result,'\n')

// ==========================

function loginusermessage(username){
    if(username === undefined)
    {
       console.log('Please Check username') 
       return
    }
        return `${username} just logged in`
    
}

const logininfo = loginusermessage()
console.log('LoggedinFo: ',logininfo,"\n")

// =============================









