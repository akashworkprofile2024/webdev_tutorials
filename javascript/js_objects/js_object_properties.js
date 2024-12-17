let person = {
    fname: 'Arjun',
    lname:'Foester',
    age:30,
    email:'akash51.50500@gmail.com'
}

// Accessing JavaScript Properties

console.log('full-details:',person,'\n')

// METHOD 1
let age = person.age;
console.log('Age:',age)

// METHOD 2
let fname = person['fname']
console.log('Name:',fname)

// METHOD 3 
let storefname = person.fname
let storelname = person.lname
console.log('Name: '+storefname+" "+'Lname: '+storelname);
