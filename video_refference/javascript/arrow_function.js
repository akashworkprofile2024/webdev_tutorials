// This keyword tel about current context 

const user = {
    username: 'rakesh',
    price: 999,
    welcomeMessage: function () {
        console.log(`${this.username} , welcome to website`);

    }

}
user.welcomeMessage()

user.username = 'sam' //Overwrite function 
user.welcomeMessage(),
    console.log('\n');


// ===========================

const user1 = {
    username: 'Priya',
    price: 999,
    welcomeMessage: function () {
        console.log(`${this.username}, welcome to website`);
        console.log(this);
    }
}

console.log('refer Empty: ', this, '\n');  // refer empty 
// ==================================


function example() {
    let username = 'Arun'
    console.log(this)
    console.log(this.username, '\n')
}

example()


// ================================

const myfun = () => {
    let username = 'Rajeev'
    console.log(this)
    console.log(this.username);

}


// =============================

//  proper Arrow function

// explicit arrow function

const addTwo = (num1, num2) => {
    return num1 + num2
}
console.log('addition using arrow function: ', addTwo(5, 2), '\n')


// ==============================
//  implicit arrow function

const addfine = (num3, num4) => (num3 + num4)

console.log('adding arrow implicit return: ', addfine(5, 2), '\n');


// ==================================

// object return

const objectfun = (num5, num6) => ({ username: 'Akash' })
console.log('Object Return Using Arrow function: ', objectfun(5, 5));



