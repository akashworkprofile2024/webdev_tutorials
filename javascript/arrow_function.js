// This keyword tel about current context 

const user = {
    username:'rakesh',
    price: 999,
    welcomeMessage: function(){
        console.log(`${this.username} , welcome to website`);
        
    }
           
}
user.welcomeMessage()

user.username = 'sam' //Overwrite function 
user.welcomeMessage(),
console.log('\n');


// ===========================

const user1 = {
    username : 'Priya',
    price:999,
    welcomeMessage: function(){
       console.log(`${this.username}, welcome to website`);
       console.log(this);
    }   
}

console.log(this);  // refer empty 



