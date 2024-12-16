// JAVASCRIPT OBJECTS
const car = {type:'Fiat', model:'500', color:'white'}
console.log(car , 'type:',typeof(car))

// JAVASCRIPT OBJECT LITERALS

const PERSON = {FNAME:'AKASH', AGE:24, EYECOLOR:'PURPLE'}
console.log(PERSON, 'type:',typeof(PERSON))

// SECOND METHOD DECALRE OBJECTS

const person1 = {}

person1.fname = 'Riya',
person1.lname = 'Foster',
person1.age = 50,
person1.eyecolor = 'blue'

console.log(person1, 'type:', typeof(person1))


// NEW KEYWORD

const person2 = {}
person2.fname = 'john',
person2.lname =  'foster',
person2.age = 55;

console.log(person2,'type:', typeof(person2))


const person3 = new Object();
person3.fname = 'Arun',
person3.lname = 'Roy',
person3.age = 20,
console.log(person3,'type:',typeof(person3),'\n')


// FUNCTION USING ON OBJECT

const person4 = {
    fname:'Rahul',
    lname: 'Segal',
    age: 15,
    fullname: function(){
        return this.fname+" "+this.lname ;
        
    }
}

// OBJECTS ARE MUTABLE

const person5 = {
    fname: 'Riya',
    lname:'pereri',
    age:16,
    eyecolor:'pink',
};
console.log('BEFORE MUTABLE: ',person5)

const x = person5;
x.age = 10;

console.log('AFTER MUTABLE: ',person5)


