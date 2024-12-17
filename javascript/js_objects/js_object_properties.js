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
console.log('Name: '+storefname+" "+'Lname: '+storelname,'\n');


// ADDING NEW PROPERTIES
person.nationality =  'Indian';

console.log("Name:"+person.fname+' '+'Fname:'+person.lname,'Nationality:'+person.nationality,'\n')


// DELETE PROPERTIES
console.log('Before Delete');
console.log(person)

delete person.nationality;    //delete person['nationality'];        
console.log('After Delete');
console.log(person,'\n');


// NESTED OBJECTS

let carsholder= {
    firstname : 'Rahul',
    lastname : 'Gupta',
    carsmodel_obj : {
        car1: 'Dodge Chargers',
        car2: 'lambargini',
        car3: 'GT mustang',
    } 
}

// METHOD 1

let store1 = carsholder.carsmodel_obj.car2
console.log('Fetch_car2:',store1);

// METHOD 2
let store2 = carsholder['carsmodel_obj']['car1'];
console.log("Fetch_car1: ",store2)

// METHOD 3
let holder = 'carsmodel_obj';
let carmodel = 'car3';
let store3 = carsholder[holder][carmodel]
console.log('Fetch_car3:',store3)


