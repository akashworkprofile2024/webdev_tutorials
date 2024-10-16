// Stack memory (Premitive) and Heap Memory (Non -premitive)

// Stack give copy of variable   and Heap gives refrence of original value


let myfun = "Akashworkprofile"
let anotherfun = myfun
anotherfun = 'Biswasworkprofile'

console.log("myfun Function: ",myfun);
console.log("anotherfun Function: ",anotherfun,'\n');


let user = {
    username: 'Akash',
    email: 'akash51.50500@gmail.com',
    phone: 798098263
}

let usertwo = user

console.log("USER FUNCTION \n",user,'\n');
console.log("USERTWO FUNCTION \n",usertwo);

usertwo.email = 'akash.bisvas2018@gmail.com';

console.log("USER FUNCTION \n",user,'\n');
console.log("USERTWO FUNCTION \n",usertwo);

